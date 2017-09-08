<?php

namespace App\Http\Controllers\MemberAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Trait
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
//Password Broker Facade
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller {

    //Sends Password Reset emails
    use SendsPasswordResetEmails;

    //Shows form to request password reset
    public function showLinkRequestForm() {
        return view('member.passwords.email');
    }

    //Password Broker for Member Model
    public function broker() {
        return Password::broker('members');
    }

}
