<?php

namespace App\Http\Controllers;

use App\Models\FoundId;
use App\Models\IdReplacement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Http\Controllers\payController;
use Mpesa;


class IdReplacementController extends Controller
{
    public function showForm()
    {
        return view('admin.id_replacement');
    }
   
    public function submitExpired(Request $expiredFormData)
    {
        $expiredFormData->validate([
            'admission' => 'required|string',
            'name' => 'required|string',
            'email' => ['required', 'email', 'max:255', 'ends_with:@strathmore.edu'],
            'faculty' => 'required|string',
            'course' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'id_photo_expired' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Store photo and ID photo paths
        $photoPath = $expiredFormData->file('photo')->store('photos');
        $idPhotoPath = $expiredFormData->file('id_photo_expired')->store('id_photos');

         
    
        $user = Auth::user();

        // Save the request to database
        IdReplacement::create([
            'user_id' => $user->id,
            'admission' => $expiredFormData->admission,
            'name' => $expiredFormData->name,
            'email' => $expiredFormData->email,
            'faculty' => $expiredFormData->faculty,
            'course' => $expiredFormData->course,
            'photo_path' => $photoPath,
            'id_photo_expired_path' => $idPhotoPath,
            'type' => 'expired', // Indicates it's an expired ID request
            'status' => 'pending', // Initial status
        ]);

        return view('payment\pay', ['expiredFormData' => $expiredFormData]);
    }
     
    
    
    public function submitLost(Request $lostFormData)
    {
        $lostFormData->validate([
            'admission' => 'required|string',
            'name' => 'required|string',
            'email' => ['required', 'email', 'max:255', 'ends_with:@strathmore.edu'],
            'faculty' => 'required|string',
            'course' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'police_abstract' => 'required|file|mimes:pdf,jpeg,png,jpg|max:2048',
        ]);

        // Check if admission exists in FoundIds table
        $foundId = FoundId::where('admission_on_id', $lostFormData->admission)->first();

        // If found, return message to collect ID from the office
        if ($foundId) {
            return redirect()->back()->with('status', 'ID already found. Please collect it from the office.');
        }

        // Store photo and abstract paths
        $photoPath = $lostFormData->file('photo')->store('photos');
        $abstractPath = $lostFormData->file('police_abstract')->store('abstracts');

        $user = Auth::user();

        // Save the request to database
        IdReplacement::create([
            'user_id' => $user->id,
            'admission' => $lostFormData->admission,
            'name' => $lostFormData->name,
            'email' => $lostFormData->email,
            'faculty' => $lostFormData->faculty,
            'course' => $lostFormData->course,
            'photo_path' => $photoPath,
            'police_abstract_path' => $abstractPath,
            'type' => 'lost', // Indicates it's a lost ID request
            'status' => 'pending', // Initial status
        ]);

        return view('payment\pay', ['lostFormData' => $lostFormData]);
    } 
    

    public function showAllReplacements()
    {
        $idReplacementsList = IdReplacement::all();
        return view('user.id_replacement_list', compact('idReplacementsList'));
       
    }

    private function mpesaStkPush($amount, $phone)
    {
        $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $headers = [
          'Authorization: Bearer XcHZox1wqgc0j7ZayE2CStZKEGkx',
           'Content-Type' => 'application/json'
       ];

       $timestamp = date('YmdHis');
       $password = base64_encode('174379' . 'bfb279f9a9a9bd9f15e97d' . $timestamp);

       $postData = json_encode([
         "BusinessShortCode" => 174379,
         "Password" => $password,
         "Timestamp" => $timestamp,
            "TransactionType" => "CustomerPayBillOnline",
           "Amount" => '1',
           "PartyA" => '254712261994',
           "PartyB" => 174379,
           "PhoneNumber" => '254712261994',
           "CallBackURL" => "https://804c-197-136-185-70.ngrok-free.app/payments/stkcallback",
            "AccountReference" => "CompanyXLTD",
          "TransactionDesc" => "ID Replacement Payment"
       ]);

       $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_POST, 1);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response);
    }
//}
}