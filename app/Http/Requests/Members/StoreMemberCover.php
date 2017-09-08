<?php

namespace App\Http\Requests\Members;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberCover extends FormRequest {

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
        $allowedFileTypes = env('ALLOWED_COVER_EXTS');
        $maxFileSize = env('MAX_COVER_SIZE');
        return [
            'link' => 'required|file|mimes:' . $allowedFileTypes . '|max:' . $maxFileSize,
        ];
    }

    public function messages() {
        $size = env('maxFileSize') / 1024;
        return [
            'link.required' => 'A valid image is required.',
            'link.file' => 'Please select cover photo.',
            'link.mimes' => 'Only .jpg,.png,.jpeg files are allowed at the moment. ',
            'link.max' => 'Cover photo must be a maximum of ' . $size . 'MB',
        ];
    }

}
