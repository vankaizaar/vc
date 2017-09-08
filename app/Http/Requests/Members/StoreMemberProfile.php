<?php

namespace App\Http\Requests\Members;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Member\Member;
use Auth;

class StoreMemberProfile extends FormRequest
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
        return [                                 
            'dob' => 'required|date',
            'telephone' => 'required',
            'city' => 'required',
            'country' => 'required',            
            'gender' => 'required|boolean',
        ];
    }
}
