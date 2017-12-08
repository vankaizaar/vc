<?php

namespace App\Http\Controllers\ModelAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Validator facade used in validator method
use Illuminate\Support\Facades\Validator;

//Model Model
use App\Models\Model\Model;

//Auth Facade used in guard
use Auth;

//Trigger new user notification
use App\Notifications\NewUserNotification;

class RegisterController extends Controller {
    
    protected $redirectPath = 'audio/create';

    //shows registration form to Artist
    public function showRegistrationForm() {
        return view('artist.auth.register');
    }

    //Handles registration request for artist
    public function register(Request $request) {

        //Validates data
        $this->validator($request->all())->validate();

        //Create model
        $model = $this->create($request->all());
        $model->notify(new NewUserNotification($model));

        //Authenticates artist
        $this->guard()->login($model);

        //Redirects artists
        return redirect($this->redirectPath);
    }

    //Validates artist's Input
    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:models',
                    'password' => 'required|min:6|confirmed',
        ]);
    }

    //Create a new artist instance after a validation.
    protected function create(array $data) {
        return Model::create([
                    'name' => title_case($data['name']),
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
        ]);
    }

    //Get the guard to authenticate Artist
    protected function guard() {
        return Auth::guard('web_model');
    }

}
