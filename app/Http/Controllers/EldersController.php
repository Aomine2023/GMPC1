<?php

namespace App\Http\Controllers;

use App\Models\Elder;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class EldersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        $elders = Elder::all();
        return view('backend.elders.index', compact('elders'));
    }

    public function add()
    {
        return view('backend.elders.create'); // Show the form to add a new elder
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'elder_name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Initialize ImageManager with a driver
            $manager = new ImageManager(['driver' => 'gd']); // Use 'gd' or 'imagick'
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->make($request->file('image')); // Create image instance
            $img->save(public_path('upload/elder/' . $name_gen)); // Save the image
            
            $save_url = 'upload/elder/' . $name_gen;

            Elder::create([
                'title' => $request->title,
                'elder_name' => $request->elder_name,
                'designation' => $request->designation,
                'image' => $save_url,
                'uuid' => (string) Str::uuid(),
            ]);

            return redirect()->route('view-elders')->with('success', 'Elder added successfully.');
        }

        return redirect()->back()->with('error', 'No image uploaded.');
    }

    public function edit($uuid)
    {
        $elder = Elder::where('uuid', $uuid)->firstOrFail(); // Fetch elder by UUID
        return view('backend.elders.edit', compact('elder'));
    }

    public function update(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'elder_name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'image' => 'image|nullable|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $elder = Elder::where('uuid', $request->uuid)->firstOrFail();

        if ($request->hasFile('image')) {
            // Delete the old image file before updating
            if ($elder->image) {
                @unlink(public_path($elder->image)); // Use @ to suppress errors if the file doesn't exist
            }

            // Initialize ImageManager with a driver
            $manager = new ImageManager(['driver' => 'gd']);
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->make($request->file('image'));
            $img->save(public_path('upload/elder/' . $name_gen)); // Save the image

            $elder->image = 'upload/elder/' . $name_gen; // Update the image path
        }

        // Update other fields
        $elder->title = $request->title;
        $elder->elder_name = $request->elder_name;
        $elder->designation = $request->designation;
        $elder->save();

        return redirect()->route('view-elders')->with('success', 'Elder updated successfully.');
    }

    public function delete($uuid)
    {
        $elder = Elder::where('uuid', $uuid)->firstOrFail();
        
        // Delete the image file before removing the record
        if ($elder->image) {
            @unlink(public_path($elder->image));
        }

        $elder->delete();
        return redirect()->back()->with('success', 'Elder deleted successfully.');
    }
}