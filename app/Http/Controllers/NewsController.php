<?php

declare (strict_types = 1);

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function View()
    {
        $news = News::get();
        return view('backend.news.index', compact('news'));
    }

    public function Add()
    {
        return view('backend.news.create');
    }
    public function Store(Request $request)
    {
        $request->validate([
            'body' => 'required',
            'news_date' => 'required',
            'venue' => 'required',
            'image' => 'required|image',
        ]);
        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            $img = $img->resize(370, 246);
            $img->save(public_path('upload/news/' . $name_gen));
            $save_url = 'upload/news/' . $name_gen;
            News::create([
                'body' => $request->body,
                'news_date' => $request->news_date,
                'venue' => $request->venue,
                'image' => $save_url,
                'created_at' => now(),
            ]);
            $notification = [
                'message' => 'News Inserted Successfully',
                'alert-type' => 'success',
            ];
            return redirect()->route('view-staff')->with($notification);
        }

        $notification = [
            'message' => 'No image uploaded.',
            'alert-type' => 'error',
        ];
        return redirect()->back()->with($notification);
    }

    public function Edit($uuid)
    {
        $news = News::where('uuid', $uuid)->first();
        if (!$news) {
            abort(404);
        }
        return view('backend.news.edit', compact('news'));
    }

    public function Update(Request $request)
    {
        $uuid = $request->uuid;
        $news = News::where('uuid', $uuid)->first();
        if (!$news) {
            abort(404);
        }

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image',
            ]);
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            $img->resize(370, 246);
            $img->save(public_path('upload/staff/' . $name_gen));
            $save_url = 'upload/staff/' . $name_gen;
            $news->image = $save_url;
        }
        $news->body = $request->body;
        $news->news_date = $request->news_date;
        $news->venue = $request->venue;
        $news->save();
        $notification = [
            'message' => 'News Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-news')->with($notification);
    }

    public function Delete($uuid)
    {
        $news = News::where('uuid', $uuid)->first();
        if (!$news) {
            abort(404);
        }
        $news->delete();
        $notification = [
            'message' => 'News Deleted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
