<?php

declare (strict_types = 1);

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Rank;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ParticipantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function View()
    {
        $participant = Participant::get();
        return view('backend.chaplians.index', compact('participant'));
    }
    public function Add()
    {
        $ranks = Rank::all();
        return view('backend.chaplians.create', compact('ranks'));
    }
    public function Store(Request $request)
    {
        $request->validate([
            'rank_name' => 'required',
            'participant_name' => 'required',
            'image' => 'required|image',
        ]);

        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            // $img = $img->resize(200, 200);
            $img->save(public_path('upload/chaplain/' . $name_gen));
            $save_url = 'upload/chaplain/' . $name_gen;
            Participant::create([
                'rank_name' => $request->rank_name,
                'participant_name' => $request->participant_name,
                'image' => $save_url,
                'created_at' => now(),
            ]);
            $notification = [
                'message' => 'Participant Inserted Successfully',
                'alert-type' => 'success',
            ];
            return redirect()->route('view-participant')->with($notification);
        }
        $notification = [
            'message' => 'No image uploaded.',
            'alert-type' => 'error',
        ];
        return redirect()->back()->with($notification);
    }

    public function Edit($uuid)
    {
        $participant = Participant::where('uuid', $uuid)->first();
        if (!$participant) {
            abort(404);
        }
        $ranks = Rank::all();
        return view('backend.chaplians.edit', compact('participant', 'ranks'));
    }

    public function Update(Request $request)
    {
        $uuid = $request->uuid;
        $participant = Participant::where('uuid', $uuid)->first();
        if (!$participant) {
            abort(404);
        }
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image',
            ]);
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            // $img->resize(370,246);
            $img->save(public_path('upload/chaplain/' . $name_gen));
            $save_url = 'upload/chaplain/' . $name_gen;
            $participant->image = $save_url;
        }
        $participant->rank_name = $request->rank_name;
        $participant->participant_name = $request->participant_name;
        $participant->save();
        $notification = [
            'message' => 'Partcipant Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-participant')->with($notification);
    }

    public function Delete($uuid)
    {
        $participant = Participant::where('uuid', $uuid)->first();
        if (!$participant) {
            abort(404);
        }
        $participant->delete();
        $notification = [
            'message' => 'Rank Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}
