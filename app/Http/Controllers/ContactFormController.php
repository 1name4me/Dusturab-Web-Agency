<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\contactMail;
use Mail;


class ContactFormController extends Controller
{

    //Store the contact form data
    public function store(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;
        
        $mailData = [
            'url' => 'http://127.0.0.1:8000',
        ];
        // send mail to admin
        $send_mail = 'omarbernardot@gmail.com';
        Mail::to($send_mail)->send(new contactMail($name, $email, $phone, $message));
        $senderMessage = 'Thanks for contacting us, we will get back to you as soon as possible!';
        return redirect()->to('/'.'#contact')->with('success', 'Thanks for contacting us, we will get back to you as soon as possible!');

        //Form validation 

        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required|digits:10|numeric',
        //     'message' => 'required'
        // ]);

        // store the data in the database

        // Contact::insert($name, $email, $phone, $message);

        // Contact::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'message' => $request->message
        // ]);

    }
}
