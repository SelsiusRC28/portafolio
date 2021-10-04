<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request){
        $message = request()->validate([
            'name' => 'required',
            'mail' => 'required|email',
            'text' => 'required'
        ]);

        Mail::to('erickrozand@gmail.com')->send(new ContactMail($message));

        return back()->with('status', 'We received your message, we will respond to you in less than 24 hours.');
    }
}
