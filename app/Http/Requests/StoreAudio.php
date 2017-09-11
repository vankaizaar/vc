<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAudio extends FormRequest {

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
        $allowedFileTypes = env('allowedMusicFiles');
        $maxFileSize = env('maxFileSize');
        return [
            'link' => 'required|mimes:' . $allowedFileTypes . '|max:' . $maxFileSize,
            'title' => 'required|max:255',

            'language' => 'required',
            'type' => 'required',
            'about_sample' => 'required|max:255'
        ];
    }

    public function messages() {
        $size = env('maxFileSize') / 1024;
        return [
            'link.required' => 'An MP3 file is required.',
            'link.mimes' => 'Only MP3,FLAC files are allowed at the moment',
            'link.max' => 'The uploaded file must be a maximum of ' . $size . 'MB',
            'title.required' => 'You need to provide a valid title for the voiceover.',
            'title.max' => 'You provide a sensible name.'

        ];
    }

}
