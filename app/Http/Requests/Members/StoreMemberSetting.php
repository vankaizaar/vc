<?php

namespace App\Http\Requests\Members;

use App\Models\Member\Member;
use Auth;
use Hash;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class StoreMemberSetting extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        $id = Auth::guard('web_member')->user()->id;
        $password = Auth::guard('web_member')->user()->password;

        Validator::extend('old_password', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value, current($parameters));
        });

        return [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:members,email,' . $id,
            'old_password' => 'nullable|required_with:new_password|old_password:' . $password,
            'new_password' => 'nullable|required_with:old_password|min:6|confirmed',
        ];
    }
    
    public function messages() {

        return [
            'name.required' => 'Please enter a name.',
            'name.max' => 'Please enter a valid name.',
            'email.required' => 'A valid email is required',
            'email.email' => 'A valid email is required',
            'email.max' => 'A valid email is required',
            'email.unique' => 'This email address is already in use by another artist.',
            'old_password.old_password' => 'This password does not match with the one in record.',
            'old_password.required_with' => 'This password does not match with the one in record.',
        ];
    }
}
