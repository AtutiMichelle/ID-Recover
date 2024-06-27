<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LostId;
use App\Models\FoundId;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Determine the user type
        $user = Auth::user();

        // Check if the user is an admin
        if ($user->usertype === 'admin') {
            // Fetch counts from respective tables
            $lostIdCount = LostId::count();
            $foundIdCount = FoundId::count();
            // $idReplacementCount = IdReplacement::count(); // Uncomment when ready

            // Pass counts to the admin view
            return view('dashboard', compact('lostIdCount', 'foundIdCount'));
        } else {
            // Regular user dashboard
            return view('admin.adminDashboard');
        }
    }
}


        // remember to add idReplacement to above view when you create


