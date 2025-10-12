<?php

namespace App\Http\Controllers;

use App\Models\AdminFaq;
use Illuminate\Http\Request;

class AdminFaqController extends Controller
{
    public function index()
    {
        $faqs = AdminFaq::all();
        return view('admin.faq', compact('faqs'));
    }
    public function create()
    {
        return view('admin.faq_create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required',
            'description' => 'required',
        ]);
        AdminFaq::create($validated);
        flash()->success('FAQ Created Successfully!');
        return redirect()->route('admin.faq.index');
    }
    public function show($id)
    {
        $faq = AdminFaq::findOrFail($id);
        return view('admin.faq_view', compact('faq'));
    }
    public function edit($id)
    {
        $faq = AdminFaq::findOrFail($id);
        return view('admin.faq_edit', compact('faq'));
    }
    public function update(Request $request, AdminFaq $faq)
    {
        $validated = $request->validate([
            'title'       => 'required',
            'description' => 'required',
        ]);
        $faq->update($validated);
        flash()->success('FAQ Updated Successfully!');
        return redirect()->route('admin.faq.index');
    }
    public function destroy($id)
    {
        $faq = AdminFaq::findOrFail($id);
        $faq->delete();
        flash()->success('FAQ Deleted Successfully!');
        return redirect()->route('admin.faq.index');
    }
}
