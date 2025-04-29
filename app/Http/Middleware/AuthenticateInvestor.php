<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateInvestor
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('investor')->check()) {
            return redirect()->route('investor.login')->with('error', 'You must log in as an investor.');
        }

        return $next($request);
    }
}