<?php

namespace App\Http\Requests\Models;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Model\ModelUser;
use Auth;

class StoreModelAlbum extends FormRequest {

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
            'title' => 'required|string|max:100',
            'type' => 'required',
            'about_album' => 'required|string|max:255',
            'link' => 'required|',
            'link.*' => 'file|image|mimes:jpeg,png,jpg|dimensions:min_width=400,min_height=400|max:2048',
        ];
    }

}
