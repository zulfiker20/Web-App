<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use Illuminate\Http\Request;

class AdminAbout extends Controller
{
    public function index()
    {
        $abouts = AboutPage::all();
        return view('admin.about', compact('abouts'));
    }
    public function create()
    {
        return view('admin.about_create');
    }
    public function show($id)
    {
        $about = AboutPage::findOrFail($id);
        return view('admin.about_view', compact('about'));
    }

    public function edit($id)
    {
        $about = AboutPage::findOrFail($id);
        return view('admin.about_edit', compact('about'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|max:255',
            'description' => 'required',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $validated['image'] = 'uploads/' . $imageName;
        }

        AboutPage::create($validated);
        flash()->success('About Page Created Successfully!');
        return redirect()->route('admin.about.index');
    }
    public function update(Request $request, AboutPage $about)
    {
        $validated = $request->validate([
            'title'       => 'required|max:255',
            'description' => 'required',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('image')) {
            if ($about->image && file_exists(public_path($about->image))) {
                unlink(public_path($about->image));
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $validated['image'] = 'uploads/' . $imageName;
        }

        $about->update($validated);
        flash()->success('About Page Updated Successfully!');
        return redirect()->route('admin.about.index');
    }

    public function destroy($id)
    {
        $about = AboutPage::findOrFail($id);
        if ($about->image && file_exists(public_path($about->image))) {
            unlink(public_path($about->image));
        }
        $about->delete();
        flash()->success('About Page Deleted Successfully!');
        return redirect()->route('admin.about.index');
    }
}
