<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class AdminBanner extends Controller
{
    public function index()
    {

        $banner = Banner::first();
        return view('admin.banner', compact('banner'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $banner = Banner::first();

        if (!$banner) {
            $banner = new Banner();
        }

        $banner->title = $request->input('title');
        $banner->subtitle = $request->input('subtitle');

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = time() . '.' . $file->getClientOriginalExtension();


            $file->move(public_path('uploads'), $filename);


            if ($banner->img && file_exists(public_path('uploads/' . $banner->img))) {
                unlink(public_path('uploads/' . $banner->img));
            }


            $banner->img = $filename;
        }


        $banner->save();

        return redirect()->route('admin.banner.index')->with('success', 'Banner updated successfully.');
    }
}
