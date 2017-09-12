<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        //This is a test to extend .mp3,.wav,.flac validation
        //
        Validator::extend('mp3_wav_flac_extension', function($attribute, $value, $parameters, $validator) {

            if (!empty($value->getClientOriginalExtension()) && ($value->getClientOriginalExtension() == 'mp3' || $value->getClientOriginalExtension() == 'wav' || $value->getClientOriginalExtension() == 'flac')) {
                return true;
            } else {
                return false;
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
