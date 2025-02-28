<?php
namespace App\Http\Controllers;

use App\Models\Elder;
use Illuminate\Http\Request;
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
        return view('backend.elders.create'); // Show the form to add a new elder
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'elder_name' => 'required',
            'image' => 'required|image',
        ]);

        if ($request->hasFile('image')) {
            $manager = new ImageManager();
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->make($request->file('image'));
            $img->save(public_path('upload/elder/' . $name_gen));
            $save_url = 'upload/elder/' . $name_gen;

            Elder::create([
                'title' => $request->title,
                'elder_name' => $request->elder_name,
                'designation' => $request->designation,
                'image' => $save_url,
                'uuid' => (string) \Str::uuid(), // Generate UUID
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
        $request->validate([
            'title' => 'required',
            'elder_name' => 'required',
            'image' => 'image|nullable',
        ]);

        $elder = Elder::where('uuid', $request->uuid)->firstOrFail();

        if ($request->hasFile('image')) {
            $manager = new ImageManager();
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->make($request->file('image'));
            $img->save(public_path('upload/elder/' . $name_gen));
            $elder->image = 'upload/elder/' . $name_gen;
        }

        $elder->title = $request->title;
        $elder->elder_name = $request->elder_name;
        $elder->designation = $request->designation;
        $elder->save();

        return redirect()->route('view-elders')->with('success', 'Elder updated successfully.');
    }

    public function delete($uuid)
    {
        $elder = Elder::where('uuid', $uuid)->firstOrFail();
        $elder->delete();
        return redirect()->back()->with('success', 'Elder deleted successfully.');
    }
}