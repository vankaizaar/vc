<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Artist;
use Auth;

class StoreProfile extends FormRequest {

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
            'about' => 'required|max:255',
            'gender' => 'required|boolean',
            
            'native_language' => 'required',
            'voice_categories' => 'required',
            
            'project_5000_time' => 'required|numeric',
            'project_500_time' => 'required|numeric',
            'project_50_time' => 'required|numeric',
            'project_5_time' => 'required|numeric',
            
            'project_5000_cost' => 'required|numeric',
            'project_500_cost' => 'required|numeric',
            'project_50_cost' => 'required|numeric',
            'project_5_cost' => 'required|numeric',
        ];
    }
    
    public function messages() {
        
        return [
            'project_5000_time.required' => 'Time in minutes is required.',
            'project_500_time.required' => 'Time in minutes is required.',           
            'project_50_time.required' => 'Time in minutes is required.',
            'project_5_time.required' => 'Time in minutes is required.',
            
            'project_5000_time.numeric' => 'Time can only be in numbers.',
            'project_500_time.numeric' => 'Time can only be in numbers.',           
            'project_50_time.numeric' => 'Time can only be in numbers.',
            'project_5_time.numeric' => 'Time can only be in numbers.',
            
            
            'project_5000_cost.required' => 'Amount in Ksh is required.',
            'project_500_cost.required' => 'Amount in Ksh is required.',           
            'project_50_cost.required' => 'Amount in Ksh is required.',
            'project_5_cost.required' => 'Amount in Ksh is required.',
            
            'project_5000_cost.numeric' => 'Amount can only be in numbers.',
            'project_500_cost.numeric' => 'Amount can only be in numbers.',           
            'project_50_cost.numeric' => 'Amount can only be in numbers.',
            'project_5_cost.numeric' => 'Amount can only be in numbers.',
            
        ];
    }

}
