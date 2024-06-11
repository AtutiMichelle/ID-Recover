<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\FoundIdController;

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


require __DIR__.'/auth.php';

Route::get('admin/dashboard' , [LoginController::class , 'index'])->
middleware(['auth' , 'admin']);

Route::get('/socialite/{driver}', [SocialLoginController::class , 'toProvider']) ->where('driver','github|google');
Route::get('/auth/{driver}/login', [SocialLoginController::class , 'handleCallBack']) ->where('driver','github|google');

Route::get('/submit_found_id', [FoundIdController::class, 'showSubmitFoundIdForm'])->name('submit_found_id_form');
Route::put('/found_id/{id}', [FoundIdController::class, 'updateFoundId'])->name('update_found_id');



