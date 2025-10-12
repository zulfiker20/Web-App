<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategory extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category', compact('categories'));
    }
    public function create()
    {
        return view('admin.categories_create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
        ]);


        Category::create($validated);
        flash()->success('Category Created Successfully!');
        return redirect()->route('admin.categories.index');
    }
    public function show($id)
    {
        $categories = Category::findOrFail($id);
        return view('admin.categories_view', compact('categories'));
    }

    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        return view('admin.categories_edit', compact('categories'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);
        $category->title = $validated['title'];
        $category->save();

        flash()->success('Category Updated Successfully!');
        return redirect()->route('admin.categories.index');
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        flash()->success('Category Deleted Successfully!');
        return redirect()->route('admin.categories.index');
    }
}
