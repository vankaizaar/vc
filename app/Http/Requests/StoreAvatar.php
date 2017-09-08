<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAvatar extends FormRequest {

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
        $allowedFileTypes = env('ALLOWED_AVATAR_EXTS');
        $maxFileSize = env('MAX_AVATAR_SIZE');
        return [
            'link' => 'required|file|mimes:' . $allowedFileTypes . '|max:' . $maxFileSize,
        ];
    }
    
    public function messages() {
        $size = env('maxFileSize') / 1024;
        return [
            'link.required' => 'A valid image is required.',
            'link.file' => 'Please select profile picture.',
            'link.mimes' => 'Only .jpg,.png,.jpeg files are allowed at the moment. ',
            'link.max' => 'Profile picture must be a maximum of ' . $size . 'MB',            
        ];
    }

}
