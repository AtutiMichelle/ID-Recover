<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    // Other methods...
     
    public function index()
    {
        return view('dashboard'); // Change this to the user dashboard view
    }

    

}