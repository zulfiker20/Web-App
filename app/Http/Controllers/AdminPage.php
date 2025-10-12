<?php

namespace App\Http\Controllers;


use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminPage extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages', compact('pages'));
    }
    public function create()
    {
        return view('admin.pages_create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required',
            'description' => 'required',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        Page::create($validated);
        flash()->success('Page Created Successfully!');
        return redirect()->route('admin.pages.index');
    }
    public function show($id)
    {
        $pages = Page::findOrFail($id);
        return view('admin.pages_view', compact('pages'));
    }

    public function edit($id)
    {
        $pages = Page::findOrFail($id);
        return view('admin.pages_edit', compact('pages'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title'       => 'required|max:255',
            'description' => 'required',
        ]);

        $page = Page::findOrFail($id);

        $page->title = $validated['title'];
        $page->description = $validated['description'];
        $page->save();

        flash()->success('Page Updated Successfully!');
        return redirect()->route('admin.pages.index');
    }
    public function destroy($id)
    {
        $pages = Page::findOrFail($id);
        $pages->delete();
        flash()->success('Page Deleted Successfully!');
        return redirect()->route('admin.pages.index');
    }
}
