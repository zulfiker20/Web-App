<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        return view('front.contact');
    }
    public function store(Request $request){
        
        $form_data = $request->validate([
            'name'    => 'required|string|max:50',
            'email'   => 'required|email',
            'message' => 'required|string|max:100',
        ]);
        Mail::to('zulfikerhossain2023@gmail.com')->send(new ContactMail($form_data));
        flash()->success('Message Sent Successfully!');
        return redirect()->back();
    }
}
