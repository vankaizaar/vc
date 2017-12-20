<?php

namespace App\Http\Controllers\ModelAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Validator facade used in validator method
use Illuminate\Support\Facades\Validator;

//Model Model
use App\Models\Model\ModelUser;

//Auth Facade used in guard
use Auth;

//Trigger new user notification
use App\Notifications\NewModelUserNotification;

class RegisterController extends Controller {
    
    protected $redirectPath = 'modelalbums/create';

    //shows registration form to models
    public function showRegistrationForm() {
        return view('model.auth.register');
    }

    //Handles registration request for model
    public function register(Request $request) {

        //Validates data
        $this->validator($request->all())->validate();

        //Create model
        $modelUser = $this->create($request->all());
        $modelUser->notify(new NewModelUserNotification($modelUser));

        //Authenticates model
        $this->guard()->login($modelUser);

        //Redirects models
        return redirect($this->redirectPath);
    }

    //Validates models's Input
    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:model_users',
                    'password' => 'required|min:6|confirmed',
        ]);
    }

    //Create a new model instance after a validation.
    protected function create(array $data) {
        return ModelUser::create([
                    'name' => title_case($data['name']),
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
        ]);
    }

    //Get the guard to authenticate Models
    protected function guard() {
        return Auth::guard('web_model');
    }

}
