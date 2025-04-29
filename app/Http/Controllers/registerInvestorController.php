<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserInvestor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\OtpMail;

class registerInvestorController extends Controller
{
    public function registerInvestor(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:user_investors',
            'password' => 'required|min:6',
        ]);

        $investor = UserInvestor::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $otp = rand(1000, 9999);

        // Store OTP and user ID in session
        Session::put('otp_code', $otp);
        Session::put('otp_verified', false);
        Session::put('investor_id', $investor->id);
        Session::put('user_investor_email', $investor->email); // ✅ Important for resend

        // Send OTP email
        Mail::to($investor->email)->send(new OtpMail($otp));

        return redirect()->route('verify.otp');
    }
}