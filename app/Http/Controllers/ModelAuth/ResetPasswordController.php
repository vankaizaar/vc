<?php

namespace App\Http\Controllers\ModelAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
//Auth Facade
use Illuminate\Support\Facades\Auth;
//Password Broker Facade
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller {

     //Seller redirect path
    protected $redirectTo = '/model_home';
    
    //trait for handling reset Password
    use ResetsPasswords;

    //Show form to seller where they can reset password
    public function showResetForm(Request $request, $token = null) {
        return view('artist.passwords.reset')->with(
                        ['token' => $token, 'email' => $request->email]
        );
    }
    
    //returns Password broker of seller
    public function broker()
    {
        return Password::broker('models');
    }
    
    //returns authentication guard of seller
    protected function guard()
    {
        return Auth::guard('web_model');
    }

}
