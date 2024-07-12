<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming User model is used
use Illuminate\Support\Facades\Auth;
use App\Models\LostId;
use App\Models\FoundId;
use App\Models\IdReplacement;

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
            $idReplacementCount = IdReplacement::count(); // Uncomment when ready

            // Fetch new users
            $newUsers = User::orderBy('created_at', 'desc')->take(5)->get(); // Example query to fetch 5 most recent users

            // Pass counts and new users to the admin view
            return view('dashboard', compact('lostIdCount', 'foundIdCount', 'idReplacementCount' , 'newUsers'));
        } else {
            // Regular user dashboard
            return view('admin.adminDashboard');
        }
    }
}
