<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\ChurchHistory; // Assuming this model is for history entries
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ChurchHistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // View all history entries
    public function view()
    {
        $history = ChurchHistory::all(); // Fetch all history records
        return view('backend.news.index', compact('history')); // Adjust view path as necessary
    }

    // Show the form to add a new history entry
    public function add()
    {
        return view('backend.news.create'); // Adjust view path as necessary
    }

    // Store a new history entry
    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required',
            // Add other validations as necessary
        ]);

        ChurchHistory::create([
            'body' => $request->body,
            'created_at' => now(),
            // Add other fields as necessary
        ]);

        $notification = [
            'message' => 'History Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-history')->with($notification);
    }

    // Show the form to edit a specific history entry
    public function edit($uuid)
    {
        $history = ChurchHistory::where('uuid', $uuid)->first();
        if (!$history) {
            abort(404);
        }
        return view('backend.news.edit', compact('history')); // Adjust view path as necessary
    }

    // Update a specific history entry
    public function update(Request $request)
    {
        $uuid = $request->uuid;
        $history = ChurchHistory::where('uuid', $uuid)->first();
        if (!$history) {
            abort(404);
        }

        // Handle image upload if needed
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image',
            ]);
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            $img->resize(370, 246);
            $img->save(public_path('upload/history/' . $name_gen)); // Adjust path as necessary
            $save_url = 'upload/history/' . $name_gen;
            $history->image = $save_url;
        }

        // Update other fields
        $history->body = $request->body;
        $history->save();

        $notification = [
            'message' => 'History Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-history')->with($notification);
    }

    // Delete a specific history entry
    public function delete($uuid)
    {
        $history = ChurchHistory::where('uuid', $uuid)->first();
        if (!$history) {
            abort(404);
        }
        $history->delete();

        $notification = [
            'message' => 'History Deleted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}