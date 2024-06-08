<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user', function () {
    return view('user');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*for google auth*/
// Route::get('/auth/redirect',function(){
//     return Socialite::driver('github')->redirect();
// });

// Route::get('/auth/github' , function(){
//     try{
//         $user=Socialite::driver('github')->user();
//     }
//     catch(\Laravel\Socialite\Two\InvalidStateException $e) {
//         return redirect('/auth/github');
//     }

//     $newUser = \App\Models\User::firstOrCreate(
//         ['email' => $user->email],
//         [
//             'name'=>$user->name,
//             'password'=> Hash::make(Str::random(24)),
//         ]
//         );

//         Auth::guard('users')->login($newUser);

//         return redirect('/views/user');
// });

/*for google auth*/

// Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
//     Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
// });

// Route::middleware(['auth', 'user'])->prefix('user')->group(function () {
//     Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
// });


require __DIR__.'/auth.php';

Route::get('admin/dashboard' , [LoginController::class , 'index'])->
middleware(['auth' , 'admin']);
