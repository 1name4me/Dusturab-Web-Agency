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

    
        // store the data in the database

        // $data = Contact::insert([
        //     'name' => $name,
        //     'email' => $email,
        //     'phone' => $phone,
        //     'message' => $message
        // ]);
        // if ($data) echo '<h1>sent data to database</h1>';
        // else echo '<h1>error sending</h1>';
      
    }

    

}
