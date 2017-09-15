<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Mail;

class ContactUSController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUS() {
        return view('contactUS');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUSPost(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        ContactUS::create($request->all());

        Mail::send('emails.contact', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
                ), function($message) {
            $message->from('support@talentguru.africa');
            $message->to('chris@talentguru.africa', 'Chris Bitti')->subject('Talent Guru Contact Form');
        });

        return redirect('/')->with('success', 'Thank you for contacting us we will get back to you soon.');
    }

}
