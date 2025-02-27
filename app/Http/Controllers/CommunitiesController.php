<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\Request;

class CommunitiesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        $communities = Community::all(); // Changed to plural for clarity
        return view('backend.communities.index', compact('communities'));
    }

    public function add()
    {
        return view('backend.communities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);

        // Handle the uploaded image
        $imagePath = $request->file('image')->store('images', 'public'); // Store in 'storage/app/public/images'

        Community::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $imagePath, // Save the image path
            'created_at' => now(),
        ]);

        return redirect()->route('view-communities')->with([
            'message' => 'Community Inserted Successfully',
            'alert-type' => 'success',
        ]);
    }

    public function edit($uuid)
    {
        $community = Community::where('uuid', $uuid)->firstOrFail(); // Use firstOrFail for simplicity
        return view('backend.communities.edit', compact('community'));
    }

    public function update(Request $request, $uuid)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            // You may also want to validate the image here if it's optional
        ]);

        $community = Community::where('uuid', $uuid)->firstOrFail(); // Use firstOrFail for simplicity
        $community->title = $request->title;
        $community->body = $request->body;

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $community->image = $imagePath; // Update the image path
        }

        $community->save();

        return redirect()->route('view-communities')->with([
            'message' => 'Community Updated Successfully',
            'alert-type' => 'success',
        ]);
    }

    public function delete($uuid)
    {
        $community = Community::where('uuid', $uuid)->firstOrFail(); // Use firstOrFail for simplicity
        $community->delete();
        
        return redirect()->back()->with([
            'message' => 'Community Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }
}