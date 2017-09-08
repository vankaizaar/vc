<?php

namespace App\Http\Controllers\ArtistAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//Auth facade
use Auth;

class LoginController extends Controller
{
    /**Where to redirect seller after login.**/
    protected $redirectTo = '/artist_home';
    
    /**Trait**/
    use AuthenticatesUsers;
    
    //**Custom guard for artist**//
    protected function guard()
    {
        return Auth::guard('web_artist');
    }
    
    /**show artist the login form**/
    public function showLoginForm() 
    {       
        return view('artist.auth.login');        
    }
}
