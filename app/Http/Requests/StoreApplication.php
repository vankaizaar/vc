<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class StoreApplication extends FormRequest {

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
            'artist_id' => 'required|unique_with:applications,artist_id,job_id,member_id',
            'job_id' => 'required',
            'member_id' => 'required',
        ];
    }

    public function messages() {

        return [
            'artist_id.required' => 'Please try again.',
            'artist_id.unique_with' => 'Sorry you cannot apply for the same job twice.',
            'job_id.required' => 'Please try again.',
        ];
    }

}
