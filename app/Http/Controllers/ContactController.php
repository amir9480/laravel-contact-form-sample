<?php

namespace App\Http\Controllers;

use App\Message;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function show()
    {
        return view("index");
    }

    public function send(ContactRequest $request)
    {
        Mail::to(config("contact.email"))
            ->send(new Contact(Message::create($request->all())));
        return redirect()->back()->with(['success' => 'پیام شما با موفقیت ارسال شد.']);
    }
}
