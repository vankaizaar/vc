<?php

namespace App\Http\Requests\Subscriber;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Subscriber\Subscriber;

class StoreSubscriber extends FormRequest {

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
            'name' => 'required|string',
            'email' => 'required|email|unique:subscribers,email',
            'category' => ['required', Rule::in(['Coding & Tech', 'Design', 'Digital Media Buy', 'Makeup', 'Modelling', 'Motion Graphics', 'Photography', 'Script Writing', 'Strategy'])]
        ];
    }

    public function messages() {

        return [
            'name.required' => 'Your name is required.',
            'name.string' => 'Your name must be valid.',
            'email.required' => 'Your email is required in order for us to get back to you.',
            'email.email' => 'Your email must be valid.',
            'email.unique' => 'You have already pre-registered. We will notify you once the platform is ready.',
            'category.required' => 'Please select a talent category.',
            'category.in' => 'Please select a valid talent category.'
        ];
    }

}
