<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create(): View
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'min:5', 'max:255'],
            'content' => ['required', 'min:5', 'max:255'],
        ]);

        Mail::to('luisprmat@yahoo.com')->send(new ContactMessage($validated));

        return to_route('home')->with('status', __('We have received your request, we will respond to you soon!'));
    }
}
