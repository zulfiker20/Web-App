<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AdminServices extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services', compact('services'));
    }
    public function create()
    {
        return view('admin.service_create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required',
            'icon'        => 'required',
            'sub_title'   => 'required',
            'description' => 'required',
        ]);
        Service::create($validated);
        flash()->success('Service Created Successfully!');
        return redirect()->route('admin.services.index');
    }
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.service_view', compact('service'));
    }
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.service_edit', compact('service'));
    }
    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title'       => 'required',
            'icon'        => 'required',
            'sub_title'   => 'required',
            'description' => 'required',
        ]);
        $service->update($validated);
        flash()->success('Service Updated Successfully!');
        return redirect()->route('admin.services.index');
    }
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        flash()->success('Service Deleted Successfully!');
        return redirect()->route('admin.services.index');
    }
}
