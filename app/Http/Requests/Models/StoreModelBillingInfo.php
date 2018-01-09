<?php

namespace App\Http\Requests\Models;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Model\ModelUser;
use Auth;

class StoreModelBillingInfo extends FormRequest {

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
            'project_hourly_cost' => 'required|numeric',
            'project_half_day_cost' => 'required|numeric',
            'project_full_day_cost' => 'required|numeric',
        ];
    }

}
