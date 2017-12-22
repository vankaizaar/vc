<?php

namespace App\Http\Controllers\ModelAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//Auth facade
use Auth;

class LoginController extends Controller {
    /*     * Where to redirect seller after login.* */

    protected $redirectTo = '/model_home';

    /*     * Trait* */
    use AuthenticatesUsers;

    //**Custom guard for models**//
    protected function guard() {
        return Auth::guard('web_model');
    }

    /*     * show artist the login form* */

    public function showLoginForm() {
        return view('model.auth.login');
    }
    
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/model_login');
    }

}
