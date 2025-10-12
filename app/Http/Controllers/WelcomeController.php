<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Service;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $services = Service::take(5)->get();
        return view('welcome', compact('banners', 'services'));
    }
}
