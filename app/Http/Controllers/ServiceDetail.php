<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceDetail extends Controller
{
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('front.service-detail', compact('service'));
    }
}
