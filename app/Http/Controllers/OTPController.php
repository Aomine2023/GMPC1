<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpMail;
use App\Models\UserInvestor;

class OTPController extends Controller
{
    public function showVerifyOtpForm()
    {
        return view('auth.otp');
    }

    public function verifyOtp(Request $request)
    {
        // Combine the OTP digits into a single string
        $inputOtp = $request->input('digit1') . $request->input('digit2') . $request->input('digit3') . $request->input('digit4');

        // Get the investor ID from the session
        $investorId = session('investor_id');

        // Find the investor by ID
        $investor = UserInvestor::find($investorId);

        // Check if the investor exists and if the OTP matches
        if ($investor && $investor->otp_code == $inputOtp) {
            // OTP is verified, store this in the session
            session(['otp_verified' => true]);

            // Redirect to the investor dashboard or welcome page
            return redirect()->route('investor.dashboard');
        }

        // If OTP is incorrect, go back with an error message
        return back()->with('error', 'Invalid OTP. Please try again.');
    }



    public function resendOtp(Request $request)
    {
        $email = Session::get('user_investor_email');

        if (!$email) {
            return redirect()->back()->with('error', 'Email not found. Please try again.');
        }

        $userInvestor = UserInvestor::where('email', $email)->first();

        if (!$userInvestor) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $otp_code = rand(1000, 9999);

        // Save OTP in DB (optional) or Session
        $userInvestor->otp_code = $otp_code;
        $userInvestor->save();

        Session::put('otp_code', $otp_code);

        Mail::to($userInvestor->email)->send(new OtpMail($otp_code));

        return redirect()->back()->with('success', 'OTP has been resent to your email.');
    }


    public function AdminVerifyOtpForm()
    {
        return view('auth.admin_otp');
    }

    public function AdminverifyOtp(Request $request)
    {
        $request->validate([
            'otp_code' => 'required|digits:4',
        ]);

        $otp_code = Session::get('otp_code');
        if ($request->otp_code == $otp_code) {
            Session::put('otp_verified', true);
            Session::forget('otp_code');
            return redirect()->route('dashboard')->with('success', 'OTP verified successfully!');
        } else {
            return redirect()->back()->withErrors(['otp' => 'Invalid OTP. Please try again.']);
        }
    }


    public function adminresendOtp(Request $request)
    {
        $otp_code = rand(1000, 9999);
        Session::put('otp_code', $otp_code);
        // Get the authenticated user's email
        $email = Auth::user()->email ?? null;
        // Ensure email exists before sending
        if (!empty($email)) {
            Mail::to($email)->send(new OtpMail($otp_code));
            return redirect()->back()->with('success', 'OTP has been resent.');
        }

        return redirect()->back()->with('error', 'Failed to resend OTP. No authenticated user email found.');
    }
}