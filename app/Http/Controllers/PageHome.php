<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageHome extends Controller
{
    public function privacy()
    {
        $pages = Page::find(1);
        return view('front.privacy', compact('pages'));
    }
    public function terms()
    {
        $pages = Page::find(2);
        return view('front.terms', compact('pages'));
    }
}
