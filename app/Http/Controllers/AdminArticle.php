<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminArticle extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('admin.article', compact('articles'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.article_create', compact('categories'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required',
            'category_id' => 'required',
            'author'      => 'nullable',
            'description' => 'required',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $validated['image'] = 'uploads/' . $imageName;
        }

        Article::create($validated);
        flash()->success('Article Created Successfully!');
        return redirect()->route('admin.articles.index');
    }
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article_view', compact('article'));
    }
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article_edit', compact('article'));
    }
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title'       => 'required',
            'category_id' => 'required',
            'author'      => 'nullable',
            'description' => 'required',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png',
        ]);
        if ($request->hasFile('image')) {
            if ($article->image && file_exists(public_path($article->image))) {
                unlink(public_path($article->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $validated['image'] = 'uploads/' . $imageName;
        }

        $article->update($validated);

        flash()->success('Article Updated Successfully!');
        return redirect()->route('admin.articles.index');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        if ($article->image && file_exists(public_path($article->image))) {
            unlink(public_path($article->image));
        }
        $article->delete();
        flash()->success('Article Deleted Successfully!');
        return redirect()->route('admin.articles.index');
    }
}
