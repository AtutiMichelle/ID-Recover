<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
// app/Http/Controllers/Auth/LoginController.php
use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Other methods...

    protected function authenticated(Request $request, $user)
    {
        if ($user->isAdmin()) {
            return redirect()->intended('/admin/dashboard');
        }

        return redirect()->intended('/user/dashboard');
    }
}