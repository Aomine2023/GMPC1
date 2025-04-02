<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        $data = ContactUs::latest()->paginate(10);
        return view('admin.layouts.contactus.contact_us', compact('data'));
    }


    public function store(Request $request)
    {
        // Validate request data
        $validated = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);
        // Save the data to the database
        ContactUs::create($validated);
        // Email content

        return redirect()->back()->with('success', 'Your message has been sent successfully! We will get back to you soon.');
    }

    public function thankyoucontact()
    {
        return view('website.thankyoucontact');
    }
}
