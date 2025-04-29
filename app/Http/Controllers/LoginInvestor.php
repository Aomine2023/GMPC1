<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Mail\OtpMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class LoginInvestor extends Controller
{

    public function Log_in(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');
        $todayDate = Carbon::now()->toDateTimeString();
        if (Auth::guard('investor')->attempt($credentials)) {
            $user = Auth::guard('investor')->user();

            $otp = rand(1000, 9999);
            // Save OTP in DB instead of just session
            $user->otp_code = $otp;
            $user->save();

            session([
                'investor_id' => $user->id,
                'user_investor_email' => $user->email, // for resend use
            ]);

            Mail::to($user->email)->send(new OtpMail($otp));

            DB::table('activity_logs')->insert([
                'uuid' => Str::uuid(),
                'name' => $user->name,
                'email' => $user->email,
                'description' => 'OTP sent for login verification',
                'date_time' => Carbon::now()->toDateTimeString(),
            ]);

            return redirect()->route('verify.otp');
        }


        return redirect()->route('investor.login')->withErrors(['error' => 'Invalid credentials. Please try again.']);
    }


    public function logoutInvestor(Request $request)
    {
        // Logout from the 'investor' guard
        Auth::guard('investor')->logout();
        // Clear all investor-related session data
        Session::forget('investor_id');
        Session::forget('otp');
        Session::forget('otp_expires_at');
        Session::forget('user_investor_email');

        // Optional: flush all session (if no other session needed)
        // Session::flush();

        return redirect()->route('investor.login')->with('success', 'You have been logged out.');
    }
}