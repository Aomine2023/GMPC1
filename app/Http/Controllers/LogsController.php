<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\OtpMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\RateLimiter;

class LogsController extends Controller
{
    public function Log_in(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $email = $request->email;
        $password = $request->password;

        $now = Carbon::now();
        $todayDate = $now->toDateTimeString();
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = Auth::user();
            // If it's the first login or password is expired, force password change
            if ($user->status == 1) {
                // Log the activity
                $activityLog = [
                    'uuid' => Str::uuid(),
                    'name' => $user->name,
                    'email' => $user->email,
                    'description' => 'has logged in',
                    'date_time' => $todayDate,
                ];
                DB::table('activity_logs')->insert($activityLog);
                $otp = rand(1000, 9999);
                Session::put('otp_code', $otp);
                Session::put('otp_verified', false);
                // Send OTP email to the authenticated user
                Mail::to($user->email)->send(new OtpMail($otp));
                return redirect()->route('admin.verify.otp');
            } else {
                Auth::logout();
                return redirect()->route('admin-login')->withErrors(['error' => 'Your account is deactivated. Please contact the Admin.']);
            }
        }
        return redirect()->route('admin-login')->withErrors(['error' => 'Invalid credentials. Please try again.']);
    }

    public function Logout()
    {
        $user = Auth::user();
        $name = $user->name;
        $email = $user->email;
        $dt = Carbon::now();
        $todayDate = $dt->toDateTimeString();
        $activityLog = [
            'uuid' => Str::uuid(),
            'name' => $name,
            'email' => $email,
            'description' => 'has logged out',
            'date_time' => $todayDate,
        ];
        DB::table('activity_logs')->insert($activityLog);
        Auth::logout();
        return redirect()->route('admin-login')->with('success', 'User Logout Successfully');
    }
}