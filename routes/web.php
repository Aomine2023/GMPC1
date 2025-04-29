<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Investors\InvestorCardController;
use App\Http\Controllers\Investors\InvestorChatController;
use App\Http\Controllers\Investors\InvestorDashboardController;
use App\Http\Controllers\Investors\InvestorFaqsController;
use App\Http\Controllers\LoginInvestor;
use App\Http\Controllers\LogsController;
use App\Http\Controllers\OTPController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\registerInvestor;
use App\Http\Controllers\registerInvestorController;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('backend.layouts.index');
})->name('dashboard');

Route::get("/", function () {
    return view("auth.login");
})->name('investor.login');

Route::get("/admin-login", function () {
    return view("auth.adminlogin");
})->name('admin-login'); // Add the name here

// Route::get("/admin-login", function () {
//     return view("auth.adminlogin");
// });

Route::get('/dashboard', function () {
    return view('backend.layouts.index');
})->middleware(['auth:sanctum'])->name('dashboard');


Route::get('/register-account', function () {
    return view('auth.register');
})->name('register-account');



// register investor
Route::post('/investor-registion', [registerInvestorController::class, 'registerInvestor'])->name('investor-registion');

Route::get('/verify/otp', [OTPController::class, 'showVerifyOtpForm'])->name('verify.otp');

Route::post('investor-login', [LoginInvestor::class, 'Log_in'])->name('investor-login');
Route::get('/investor/logout', [LoginInvestor::class, 'logoutInvestor'])->name('investor.logout');

Route::post('/verify/otp', [OTPController::class, 'verifyOtp'])->name('otp.verify');
Route::post('/resend-otp', [OTPController::class, 'resendOtp'])->name('otp.resend');
//Admin
Route::post('login', [LogsController::class, 'Log_in'])->name('log-in');
Route::get('logout', [LogsController::class, 'Logout'])->name('admin-logout')->middleware('auth');
Route::get('admin/verify/otp', [OTPController::class, 'AdminVerifyOtpForm'])->name('admin.verify.otp');
Route::post('admin/verify/otp', [OTPController::class, 'AdminverifyOtp'])->name('admin.otp.verify');
Route::post('admin/resend-otp', [OTPController::class, 'adminresendOtp'])->name('admin.otp.resend');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'ProfileView'])->name('profileview');
        Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
        Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
        Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');
        Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');
        Route::get('/inactivation{id}', [ProfileController::class, 'Inactive'])->name('user.inactive');
        Route::get('/activation{id}', [ProfileController::class, 'Active'])->name('user.active');
    });

    Route::prefix('dashbaord')->group(function () {
        Route::get('/', [AdminDashboardController::class, 'admin_dashboard'])->name('dashboard');
    });
});


Route::middleware(['auth.investor'])->group(function () {
    Route::prefix('investors-community')->group(function () {
        Route::get('/welcome-investor', [InvestorDashboardController::class, 'investor_dashboard'])->name('investor.dashboard');
        Route::get('/nvestor-profile', [InvestorDashboardController::class, 'investor_profile'])->name('investor.profile');
        Route::post('/investor/profile/update', [InvestorDashboardController::class, 'updateProfile'])->name('investor.update.profile');

        //cards
        Route::post('/investor/card/store', [InvestorCardController::class, 'store'])->name('investor.card.store');

        //faqs
        Route::get('/faqs', [InvestorFaqsController::class, 'investor_faqs'])->name('investor-faqs');
        //investor relations
        Route::get('investor/relation', [InvestorChatController::class, 'investor_chats'])->name('investor-chats');
    });
});