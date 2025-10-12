<?php

namespace App\Http\Controllers;

use App\Models\AdminTeam as ModelsAdminTeam;
use Illuminate\Http\Request;

class AdminTeam extends Controller
{
    public function index()
    {
        $teams = ModelsAdminTeam::all();
        return view('admin.team', compact('teams'));
    }
    public function create()
    {
        return view('admin.team_create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required',
            'designation' => 'required',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png',
            'facebook'    => 'nullable|url',
            'twitter'     => 'nullable|url',
            'instagram'   => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $validated['image'] = 'uploads/' . $imageName;
        }

        ModelsAdminTeam::create($validated);
        flash()->success('Team Member Created Successfully!');
        return redirect()->route('admin.teams.index');
    }
    public function show($id)
    {
        $team = ModelsAdminTeam::findOrFail($id);
        return view('admin.team_view', compact('team'));
    }
    public function edit($id)
    {
        $team = ModelsAdminTeam::findOrFail($id);
        return view('admin.team_edit', compact('team'));
    }
    public function update(Request $request, ModelsAdminTeam $team)
    {
        $validated = $request->validate([
            'name'       => 'required|max:255',
            'designation' => 'required',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png',
            'facebook'    => 'nullable|url',
            'twitter'     => 'nullable|url',
            'instagram'   => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            if ($team->image && file_exists(public_path($team->image))) {
                unlink(public_path($team->image));
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $validated['image'] = 'uploads/' . $imageName;
        }

        $team->update($validated);
        flash()->success('Team Member Updated Successfully!');
        return redirect()->route('admin.teams.index');
    }
    public function destroy($id)
    {
        $team = ModelsAdminTeam::findOrFail($id);
        if ($team->image && file_exists(public_path($team->image))) {
            unlink(public_path($team->image));
        }
        $team->delete();
        flash()->success('Team Member Deleted Successfully!');
        return redirect()->route('admin.teams.index');
    }
}
