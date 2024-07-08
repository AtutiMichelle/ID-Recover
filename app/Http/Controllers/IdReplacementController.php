<?php

namespace App\Http\Controllers;

use App\Models\FoundId;
use App\Models\IdReplacement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class IdReplacementController extends Controller
{
    public function showForm()
    {
        return view('admin.id_replacement');
    }
   
    public function submitExpired(Request $request)
    {
        $request->validate([
            'admission' => 'required|string',
            'name' => 'required|string',
            'email' => ['required', 'email', 'max:255', 'ends_with:@strathmore.edu'],
            'faculty' => 'required|string',
            'course' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'id_photo_expired' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Store photo and ID photo paths
        $photoPath = $request->file('photo')->store('photos');
        $idPhotoPath = $request->file('id_photo_expired')->store('id_photos');

        // Save the request to database
        IdReplacement::create([
            'admission' => $request->admission,
            'name' => $request->name,
            'email' => $request->email,
            'faculty' => $request->faculty,
            'course' => $request->course,
            'photo_path' => $photoPath,
            'id_photo_expired_path' => $idPhotoPath,
            'type' => 'expired', // Indicates it's an expired ID request
            'status' => 'pending', // Initial status
        ]);

        return redirect()->back()->with('status', 'ID replacement request submitted successfully.');
    }

    public function submitLost(Request $request)
    {
        $request->validate([
            'admission' => 'required|string',
            'name' => 'required|string',
            'email' => ['required', 'email', 'max:255', 'ends_with:@strathmore.edu'],
            'faculty' => 'required|string',
            'course' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'police_abstract' => 'required|file|mimes:pdf,jpeg,png,jpg|max:2048',
        ]);

        // Check if admission exists in FoundIds table
        $foundId = FoundId::where('admission_on_id', $request->admission)->first();

        // If found, return message to collect ID from the office
        if ($foundId) {
            return redirect()->back()->with('status', 'ID already found. Please collect it from the office.');
        }

        // Store photo and abstract paths
        $photoPath = $request->file('photo')->store('photos');
        $abstractPath = $request->file('police_abstract')->store('abstracts');

        // Save the request to database
        IdReplacement::create([
            'admission' => $request->admission,
            'name' => $request->name,
            'email' => $request->email,
            'faculty' => $request->faculty,
            'course' => $request->course,
            'photo_path' => $photoPath,
            'police_abstract_path' => $abstractPath,
            'type' => 'lost', // Indicates it's a lost ID request
            'status' => 'pending', // Initial status
        ]);

        return redirect()->back()->with('status', 'ID replacement request submitted successfully.');
    }

    public function showAllReplacements()
    {
        $idReplacementsList = IdReplacement::all();
        return view('user.id_replacement_list', compact('idReplacementsList'));
    }

    private function initiatePayment($admission, $amount)
    {
        // Your payment initiation logic here (to be implemented separately)
    }

    // public function showDashboard()
    // {
    //     $user = Auth::user();
    //     $idReplacements = IdReplacement::where('email', $user->email)->get();
       
    //     return view('admin.adminDashboard', compact('idReplacements'));
    // }
}
