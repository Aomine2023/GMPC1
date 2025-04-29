<?php

declare(strict_types=1);

namespace App\Http\Controllers\Investors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestorDashboardController extends Controller
{
    public function investor_dashboard()
    {

        $user = Auth::guard('investor')->user();

        // Pass user and investor data to the view
        return view('backend.investors_layouts.index', compact('user'));
    }

    public function investor_profile()
    {

        $user = Auth::guard('investor')->user();
        $cards = $user->cards; // Get all cards for the investor

        // Pass user and investor data to the view
        return view('backend.investors_layouts.profile', compact('user', 'cards'));
    }

    // public function updateProfile(Request $request)
    // {
    //     $user = Auth::guard('investor')->user();

    //     $data = $request->only(['name', 'gender', 'dob', 'phone', 'email', 'city', 'country', 'zipcode', 'address']);

    //     $user->update($data);

    //     return response()->json(['status' => 'success', 'message' => 'Profile updated successfully']);
    // }

    public function updateProfile(Request $request)
    {
        $user = Auth::guard('investor')->user();

        $data = $request->only([
            'name',
            'email',
            'phone',
            'gender',
            'dob',
            'city',
            'country',
            'zipcode',
            'address'

        ]);

        // Handle profile image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $path = 'upload/investorprofile/';
            $file->move(public_path($path), $filename);
            $data['image'] = $path . $filename;

            // Optionally delete old image
            if ($user->image && file_exists(public_path($user->image))) {
                unlink(public_path($user->image));
            }
        }
        $user->update($data);
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}