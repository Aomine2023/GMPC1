<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Elder;
use App\Models\Rank; // If needed, otherwise remove
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver; // Adjust based on your setup
use Intervention\Image\ImageManager;

class EldersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        $elders = Elder::all(); // Fetch all elders
        return view('backend.elders.index', compact('elders')); // Pass the variable to the view
    }

    public function add()
    {
        $ranks = Rank::all(); // If you need ranks; otherwise, remove this line
        return view('backend.elders.create', compact('ranks')); // Show the form to add a new elder
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'elder_name' => 'required',
            'image' => 'required|image',
        ]);

        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver()); // Initialize with the appropriate driver
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image')); // Read the image
            // $img->resize(200, 200); // Uncomment to resize if needed
            $img->save(public_path('upload/elder/' . $name_gen)); // Save the image
            $save_url = 'upload/elder/' . $name_gen;

            Elder::create([
                'title' => $request->title,
                'elder_name' => $request->elder_name,
                'designation' => $request->designation,
                'image' => $save_url,
                'uuid' => (string) \Str::uuid(),
                'created_at' => now(),
            ]);

            $notification = [
                'message' => 'Elder added successfully.',
                'alert-type' => 'success',
            ];
            return redirect()->route('view-elders')->with($notification);
        }

        $notification = [
            'message' => 'No image uploaded.',
            'alert-type' => 'error',
        ];
        return redirect()->back()->with($notification);
    }

    public function edit($uuid)
    {
        $elder = Elder::where('uuid', $uuid)->first();
        if (!$elder) {
            abort(404);
        }
        return view('backend.elders.edit', compact('elder'));
    }

    public function update(Request $request)
    {
        $uuid = $request->uuid;
        $elder = Elder::where('uuid', $uuid)->first();
        if (!$elder) {
            abort(404);
        }

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image',
            ]);
            $manager = new ImageManager(new Driver()); // Initialize with the appropriate driver
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image')); // Read the image
            // $img->resize(370, 246); // Uncomment to resize if needed
            $img->save(public_path('upload/elder/' . $name_gen)); // Save the image
            $elder->image = 'upload/elder/' . $name_gen; // Update the image path
        }

        // Update other fields
        $elder->title = $request->title;
        $elder->elder_name = $request->elder_name;
        $elder->designation = $request->designation;
        $elder->save();

        $notification = [
            'message' => 'Elder updated successfully.',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-elders')->with($notification);
    }

    public function delete($uuid)
    {
        $elder = Elder::where('uuid', $uuid)->first();
        if (!$elder) {
            abort(404);
        }
        $elder->delete();

        $notification = [
            'message' => 'Elder deleted successfully.',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}