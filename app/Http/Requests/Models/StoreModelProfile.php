<?php

namespace App\Http\Requests\Models;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Model\ModelUser;
use Auth;

class StoreModelProfile extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
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
            'height' => 'required',
            'weight' => 'required|numeric',
            'about' => 'required|max:255',
            'gender' => 'required|boolean',
            'model_categories' => 'required',
        ];
    }

}
