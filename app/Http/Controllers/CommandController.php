<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Community;
use App\Models\Rank;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class CommandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function View()
    {
        $commandants = Community::get();
        return view('backend.commandant.index', compact('commandants'));
    }
    public function Add()
    {
        $ranks = Rank::all();
        return view('backend.commandant.create', compact('ranks'));
    }
    public function Store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            // $img = $img->resize(3000, 2500);
            $img->save(public_path('upload/community/' . $name_gen));
            $save_url = 'upload/community/' . $name_gen;
            Community::create([
                'title' => $request->title,
                'body' => $request->body,
                'image' => $save_url,
                'created_at' => now(),
            ]);
            $notification = [
                'message' => 'Inserted Successfully',
                'alert-type' => 'success',
            ];
            return redirect()->route('view-communities')->with($notification);
        }
        $notification = [
            'message' => 'No image uploaded.',
            'alert-type' => 'error',
        ];
        return redirect()->back()->with($notification);
    }

    public function Edit($uuid)
    {
        $commandants = Community::where('uuid', $uuid)->first();
        if (!$commandants) {
            abort(404);
        }
        $ranks = Rank::all();
        return view('backend.commandant.edit', compact('commandants', 'ranks'));
    }

    public function Update(Request $request)
    {
        $uuid = $request->uuid;
        $commandants = Community::where('uuid', $uuid)->first();
        if (!$commandants) {
            abort(404);
        }
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image',
            ]);
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            // $img->resize(3000, 2500);
            $img->save(public_path('upload/community/' . $name_gen));
            $save_url = 'upload/community/' . $name_gen;
            $commandants->image = $save_url;
        }
        $commandants->title = $request->title;
        $commandants->body = $request->body;
        $commandants->save();
        $notification = [
            'message' => 'Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-communities')->with($notification);
    }

    public function Delete($uuid)
    {
        $commandants = Community::where('uuid', $uuid)->first();
        if (!$commandants) {
            abort(404);
        }
        $commandants->delete();
        $notification = [
            'message' => 'Deleted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
