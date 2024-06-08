<?php

namespace App\Http\Controllers;

use App\Models\SocialLogin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;


class SocialLoginController extends Controller
{
    public function toProvider($driver)
    {
      return Socialite::driver($driver)->redirect();
    }

    public function handleCallBack($driver)
    {
        // Retrieve user information from OAuth provider
        $user = Socialite::driver($driver)->user();

        // Use the GitHub username if the name attribute is null
        $name = $user->name ?? $user->nickname;

        // Find or create the user based on the email
        $db_user = User::where('email', $user->getEmail())->first();
        if (!$db_user) {
            $db_user = User::create([
                'name' => $name,
                'email' => $user->getEmail(),
                'password' => bcrypt(rand(1000, 9999))
            ]);
        }

        // Create or update the SocialLogin record
        SocialLogin::updateOrCreate(
            ['provider' => $driver, 'provider_id' => $user->getId()],
            ['user_id' => $db_user->id]
        );

        // Log in the user
        Auth::login($db_user);

        // Regenerate session
        Session::regenerate();

        // Redirect to intended page
        return redirect()->intended('dashboard');
    }
}
