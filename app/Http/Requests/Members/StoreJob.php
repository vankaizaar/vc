<?php

namespace App\Http\Requests\Members;

use Illuminate\Foundation\Http\FormRequest;

class StoreJob extends FormRequest {

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
            'title' => 'required|max:255',
            'description' => 'required|max:65535',
            'script' => 'required|max:65535',
            'delivery' => 'required',
            'length' => 'required',
            'due_date' => 'required|date'
        ];
    }
    
    public function messages() {        
        return [            
            'title.required' => 'A job title is required.',
            'title.max' => 'Job title too long.',
            'description.required' => 'A job description is required.',
            'description.max' => 'Description too long.',
        ];
    }

}
