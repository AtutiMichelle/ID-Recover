<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\FoundIdController;
use App\Http\Controllers\IdReplacementController;
use App\Http\Controllers\LostIdController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\UserManagementController;
use App\Models\LostId;

Route::get('/', function () {
    return view('welcome');
});

// original 
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('admin.adminDashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

// original
// Route::get('admin/dashboard', [LoginController::class, 'index'])
//     ->middleware(['auth', 'admin']);


Route::get('/admin/dashboard', [LoginController::class, 'index']) ->name('adminDashboard');
Route::get('/admin/dashboard', [LostIdController::class, 'showDashboard'])->name('adminDashboard');
// Route::get('/admin/dashboard', [IdReplacementController::class, 'showDashboard'])->name('adminDashboard');

Route::get('/user', function () {
    return view('user');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard', [LoginController::class, 'index'])->name('adminDashboard');
Route::get('/admin/dashboard', [LostIdController::class, 'showDashboard'])->name('adminDashboard');
// Route::get('/admin/dashboard', [IdReplacementController::class, 'showDashboard'])->name('adminDashboard');

Route::get('/socialite/{driver}', [SocialLoginController::class, 'toProvider'])
    ->where('driver', 'github|google');
Route::get('/auth/{driver}/login', [SocialLoginController::class, 'handleCallBack'])
    ->where('driver', 'github|google');

Route::get('/submit_found_id', [FoundIdController::class, 'showSubmitFoundIdForm'])
    ->name('submit_found_id_form');
Route::post('/submit_found_id', [FoundIdController::class, 'submitFoundId'])
    ->name('submit_found_id');

Route::get('/retrieve_posted_id', [FoundIdController::class, 'retrievePostedId'])
    ->name('retrieve_posted_id');

    Route::get('/admin_retrieve_posted_id', [FoundIdController::class, 'adminretrievePostedId'])
    ->name('admin_retrieve_posted_id');

// Route::get('/id_replacement', [IdReplacementController::class, 'showIdReplacementForm'])
//     ->name('id_replacement_form');
// Route::post('/submit-id-replacement', [IdReplacementController::class, 'submitIdReplacement'])
//     ->name('submit_id_replacement');

Route::get('/edit-found-id/{id}', [FoundIdController::class, 'edit'])
    ->name('edit_found_id');
Route::put('/update-found-id/{id}', [FoundIdController::class, 'update'])
    ->name('update_found_id');

Route::get('/report_lost_id', [LostIdController::class, 'createForm'])->name('report_lost_id.form');
Route::post('/report_lost_id', [LostIdController::class, 'submitForm'])->name('report_lost_id.submit');


// for the cards displaying number of found ,lost ids
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/retrieve_lost_id', [LostIdController::class, 'retrieveForm'])->name('retrieve_lost_id.form');
Route::post('/retrieve_lost_id', [LostIdController::class, 'retrieveData'])->name('retrieve_lost_id.search');
Route::get('/edit_lost_id/{id}', [LostIdController::class, 'editLostId'])->name('edit_lost_id');
Route::post('/update_lost_id/{id}', [LostIdController::class, 'updateLostId'])->name('update_lost_id');

Route::get('/users', [UserManagementController::class, 'index'])->name('view_users');
Route::get('/users/{id}/edit', [UserManagementController::class, 'edit'])->name('edit_user');
Route::put('/users/{id}', [UserManagementController::class, 'update'])->name('update_user');
Route::delete('/users/{id}', [UserManagementController::class, 'destroy'])->name('delete_user');



Route::get('/id-replacement', [IdReplacementController::class, 'showForm'])->name('id_replacement.form');
Route::post('/id-replacement-expired', [IdReplacementController::class, 'submitExpired'])->name('id_replacement.submit_expired');
Route::post('/id-replacement-lost', [IdReplacementController::class, 'submitLost'])->name('id_replacement.submit_lost');
Route::get('/admin/id-replacements', [IdReplacementController::class, 'showAllReplacements'])->name('id_replacements.list');

Route::get('/initiate-stk-push', [PayController::class, 'initiateStkPush']);
Route::post('/initiate-stk-push', [PayController::class, 'initiateStkPush']);
Route::get('/payment', [PayController::class,'initiateStkPush']);
Route::get('/payment', function () {
    return view('payment\pay');
});
// Route::get('/id-replacement', [IdReplacementController::class, 'showForm'])->name('id-replacement-form');
// Route::post('/id-replacement-expired', [IdReplacementController::class, 'submitExpired'])->name('id-replacement-submit-expired');
// Route::post('/id-replacement-lost', [IdReplacementController::class, 'submitLost'])->name('id-replacement-submit-lost');

// Route::controller(PayController::class)
// ->prefix('pay')
// ->as('pay')
// ->group(function () {
//     Route::get('/pay/initiateStkPush', [PayController::class, 'initiateStkPush']);
//     Route::post('/pay/stkCallback', [PayController::class, 'stkCallback']);
// });


// Route::controller(PayController::class)
// ->prefix('pay')
// ->as('pay')
// ->group(function () {
//     Route::get('/pay/token', [PayController::class, 'token']);
//     Route::post('/pay/token', [PayController::class, 'token']);
// });

// Route::get('/initiateStkPush', [PayController::class, 'initiateStkPush'])->name('mpesaStk_push');
// Route::post('/payments/stkCallback', [PayController::class, 'stkCallback']);
