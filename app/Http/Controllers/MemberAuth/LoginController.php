<?php

namespace App\Http\Controllers\MemberAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//Auth facade
use Auth;

class LoginController extends Controller {

    //Where to redirect seller after login.
    protected $redirectTo = '/member_home';

    //Trait
    use AuthenticatesUsers;

    //Custom guard for member
    protected function guard() {
        return Auth::guard('web_member');
    }

    //show member the login form
    public function showLoginForm() {

        return view('member.auth.login');
    }

}
