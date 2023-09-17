<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\contactMail;
use Mail;


class ContactFormController extends Controller
{
    //Create the contact form
    // public function index() {
    //     return view('home');
    // }

    //Store the contact form data
    public function store(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;
        $mailData = [
            'url' => 'http://127.0.0.1:8000',
        ];
        $send_mail = 'omarbernardot@gmail.com';
        Mail::to($send_mail)->send(new contactMail($name, $email, $phone, $message));
        $senderMessage = 'Thanks for contacting us, we will get back to you as soon as possible!';
        return view('home');

        //Form validation 

        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required|digits:10|numeric',
        //     'message' => 'required'
        // ]);

        // store the data in the database

        // Contact::create($request->all());

        // send mail to admin

        // Mail::send('contactMail', array(
        //     'name' => $request->get('name'),
        //     'email' => $request->get('email'),
        //     'phone' => $request->get('phone'),
        //     'message' => $request->get('message',)
        // ), function($message) use ($request) {
        //     $message->from($request->email);
        //     $message->to('omarbernardot@gmail.com', 'admin')->subject($request->get('message'));
        // });

        // Mail::to('omarbernardot@gmail.com')->send(new contactMail($request));

        // return redirect()->back()->with('success', 'Thanks for contacting us, we will get back to you as soon as possible!');

    }
}
