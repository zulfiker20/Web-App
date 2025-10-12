<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $articles = Article::paginate(3);
        $latestArrticles = Article::latest()->take(3)->get();
        return view('front.blogs', compact('articles', 'categories', 'latestArrticles'));
    }

    public function category($id)
    {
        $categories = Category::all();
        $articles = Article::where('category_id', $id)->paginate(3);
        $latestArrticles = Article::latest()->take(3)->get();
        return view('front.blogs', compact('articles', 'categories', 'latestArrticles'));
    }
}
