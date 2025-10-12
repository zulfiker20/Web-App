<?php

namespace App\Http\Controllers;

use App\Models\AdminFaq;
use Illuminate\Http\Request;

class FaqHome extends Controller
{
    public function index()
    {
        $faqs = AdminFaq::all();
        return view('front.faq', compact('faqs'));
    }
}
