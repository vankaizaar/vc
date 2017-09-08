<?php

namespace App\Http\Controllers\MemberAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Validator facade used in validator method
use Illuminate\Support\Facades\Validator;

//Member Model
use App\Models\Member\Member;

//Auth Facade used in guard
use Auth;

class RegisterController extends Controller {
    
    protected $redirectPath = 'memberprofile/create';

    //shows registration form to Member
    public function showRegistrationForm() {
        return view('member.auth.register');
    }

    //Handles registration request for member
    public function register(Request $request) {

        //Validates data
        $this->validator($request->all())->validate();

        //Create member
        $member = $this->create($request->all());

        //Authenticates member
        $this->guard()->login($member);

        //Redirects members
        return redirect($this->redirectPath);
    }

    //Validates member's Input
    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:members',
                    'password' => 'required|min:6|confirmed',
        ]);
    }

    //Create a new member instance after a validation.
    protected function create(array $data) {
        return Member::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
        ]);
    }

    //Get the guard to authenticate Member
    protected function guard() {
        return Auth::guard('web_member');
    }

}
