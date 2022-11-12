<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
//    public function index() {
//
//        return view('contact-us');
//    }

    public function contactUs(Request $request)
    {

//        $this->validate($request, [
//            'name' => 'required',
//            'email' => 'required|email',
//            'subject' => 'required',
//            'phone_number' => 'required',
//            'message' => 'required'
//        ]);

        $contact = new Contacts();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone = $request->phone;
        $contact->messages = $request->message;

        $contact->save();

        Mail::send('main.contact_email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'phone' => $request->get('phone'),
                'messages' => $request->get('messages'),
            ), function ($messages) use ($request) {
                $messages->from($request->email);
                $messages->to('kamauseffu@gmail.com');
            });

        return back()->with('success', 'Thank you for contacting us!');

    }
}
