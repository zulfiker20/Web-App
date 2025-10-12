<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogDetail extends Controller
{
     public function show($id)
    {
        $articles = Article::findOrFail($id);
        return view('front.blog-detail', compact('articles'));
    }
}
