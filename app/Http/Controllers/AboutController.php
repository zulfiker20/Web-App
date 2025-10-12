<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
       
        $teams = \App\Models\AdminTeam::all();
        $about = \App\Models\AboutPage::first();
        return view('front.about', compact('about', 'teams'));
    }
}
