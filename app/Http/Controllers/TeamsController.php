<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = \App\Models\AdminTeam::all();
        return view('front.teams', compact('teams'));
    }
}
