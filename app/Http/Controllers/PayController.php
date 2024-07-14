<?php

namespace App\Http\Controllers;


use App\Models\mpesaPay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Client\Response;
use \Safaricom\Mpesa\MpesaServiceProvider;
use Illuminate\Support\Facades\Mpesa;
use Illuminate\Support\Carbon;
use Illuminate\Broadcasting\Broadcasters\AblyBroadcaster;


class PayController extends Controller{
    public function index(Request $request){
        return view("payment.pay");
    }

    private function parseMpesaPhoneNumber($contact)
    {
        if (!$contact) {
            return false;
        }

        if (substr($contact, 0, 4) === "+254" && strlen($contact) === 13) {
            return str_replace("+254", "254", $contact);
        } elseif (substr($contact, 0, 3) === "254" && strlen($contact) === 12) {
            return $contact;
        } elseif (substr($contact, 0, 1) === "0" && strlen($contact) === 10) {
            return "254" . substr($contact, 1);
        } elseif (strlen($contact) === 9) {
            return "254" . $contact;
        }

        return false;
  }


    public function initiateStkPush(Request $request){
        $Amount = $request->input("amount");
        $PartyA = $this->parseMpesaPhoneNumber($request->input('phone'));
        if(isset($_POST['submit1'])){


            date_default_timezone_set('Africa/Nairobi');  

        $consumerKey='LyXRXjkVIWVIxqKDlVcoowrJCrpidGGGOIC2j3oxmTcarKxl';
        $consumerSecret= '3SPc3Nw1lQ6SBB76jlHzaGItQ2LZFdAcdMxzu0wiNdguZQy7pDYVAUGAvjJYfsmp';


      $BusinessShortCode = '174379';
     $Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';  
     $AccountReference = '2255';
     $TransactionDesc = 'Test Payment';
     $Amount = $request->input("amount");
     $PartyA = $this->parseMpesaPhoneNumber($request->input('phone'));
 
  # Get the timestamp, format YYYYmmddhms -> 20181004151020
     $Timestamp = date('YmdHis');    
  
  # Get the base64 encoded string -> $password. The passkey is the M-PESA Public Key
     $Password = base64_encode($BusinessShortCode.$Passkey.$Timestamp);

  # header for access token
     $headers = ['Content-Type:application/json; charset=utf8'];

    # M-PESA endpoint urls
     $access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
     $initiate_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

  # callback url
     $CallBackURL = 'https://11b9-197-136-185-70.ngrok-free.app';  

     $curl = curl_init($access_token_url);
     curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
     curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
     curl_setopt($curl, CURLOPT_HEADER, FALSE);
     curl_setopt($curl, CURLOPT_USERPWD, $consumerKey.':'.$consumerSecret);
     $result = curl_exec($curl);
     $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
     $result = json_decode($result);
     $access_token = $result->access_token;  
     curl_close($curl);

  # header for stk push
      $stkheader = ['Content-Type:application/json','Authorization:Bearer '.$access_token];

  # initiating the transaction
     $curl = curl_init();
     curl_setopt($curl, CURLOPT_URL, $initiate_url);
     curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader); //setting custom header

     $curl_post_data = array(
     //Fill in the request parameters with valid values
            'BusinessShortCode' => $BusinessShortCode,
          'Password' => $Password,
         'Timestamp' => $Timestamp,
          'TransactionType' => 'CustomerPayBillOnline',
          'Amount' => $Amount,
         'PartyA' => $PartyA,
         'PartyB' => $BusinessShortCode,
         'PhoneNumber' => $PartyA,
          'CallBackURL' => $CallBackURL,
          'AccountReference' => $AccountReference,
         'TransactionDesc' => $TransactionDesc
     );

     $data_string = json_encode($curl_post_data);
     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($curl, CURLOPT_POST, true);
     curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
      $curl_response = curl_exec($curl);
     // print_r($curl_response);

     // echo 'success';
      // Redirect to the desired Blade view with a success message
      return redirect()->route('id_replacement.form')->with('status', 'Payment initiated successfully!');
    }

    return redirect()->route('id_replacement.form')->with('error', 'Failed to initiate payment.');

    
   
 //return ($response);

    //   $res=json_decode($curl_response);

    //  $ResponseCode=$res->ResponseCode;
    //   if($ResponseCode== 0){
    //      $MerchantRequestId=$res->MerchantRequestId;
    //      $CheckoutRequestId=$res->CheckoutRequestId;
    //      $CustomerMessage=$res->CustomerMessage;

    // //saving to database
    //       $payment= new mpesaPay();
    //      $payment->phone=$PartyA;
    //       $payment->amount=$Amount;
    //       $payment->reference=$AccountReference;
    //      $payment->MerchantRequestId=$MerchantRequestId;
    //      $payment->CheckoutRequestId=$CheckoutRequestId;
    //      $payment->TransactionDesc=$TransactionDesc;
    //        $payment->status='requested';
    //       $payment->save();
        
    
}


    public function stkCallback(){
        $data= file_get_contents('php://input');
        Storage::disk('local') ->put('stk.txt', $data);

    //  $response=json_decode($data);

    //    $ResultCode=$response->Body->stkCallback->ResultCode;
    //    if($ResultCode== 0){
    //        $MerchantRequestId=$request->Body->stkCallback->MerchantRequestId;
    //        $CheckoutRequestId=$request->Body->stkCallback->CheckoutRequestId;
    //        $ResultDescription=$request->Body->stkCallback->ResultDescription;
    //        $Amount=$request->Body->stkCallback->Item[0]->Value;

    //        $payment=stkCallback::where('CheckoutRequestedId', $CheckoutRequestId)->firstOrfail();
    //        $payment->status= 'Paid';
    //        $payment->save();
    // }
    // else {
    //     $CheckoutRequestId=$request->Body->stkCallback->CheckoutRequestId;
    //     $ResultDescription=$request->Body->stkCallback->ResultDescription;
    //     $payment=stkCallback::where('CheckoutRequestedId', $CheckoutRequestId)->firstOrfail();

    //     $payment->ResultDescription=$ResultDescription;
    //     $payment->status= 'failed';
    //     $payment->save();

    // }
    }
}