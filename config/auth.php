<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Authentication Defaults
      |--------------------------------------------------------------------------
      |
      | This option controls the default authentication "guard" and password
      | reset options for your application. You may change these defaults
      | as required, but they're a perfect start for most applications.
      |
     */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],
    /*
      |--------------------------------------------------------------------------
      | Authentication Guards
      |--------------------------------------------------------------------------
      |
      | Next, you may define every authentication guard for your application.
      | Of course, a great default configuration has been defined for you
      | here which uses session storage and the Eloquent user provider.
      |
      | All authentication drivers have a user provider. This defines how the
      | users are actually retrieved out of your database or other storage
      | mechanisms used by this application to persist your user's data.
      |
      | Supported: "session", "token"
      |
     */
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        //Our new custom drivers.
        'web_artist' => [
            'driver' => 'session',
            'provider' => 'artists',
        ],
        'web_member' => [
            'driver' => 'session',
            'provider' => 'members',
        ],
        'web_model' => [
            'driver' => 'session',
            'provider' => 'model_users',
        ],
        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
    ],
    /*
      |--------------------------------------------------------------------------
      | User Providers
      |--------------------------------------------------------------------------
      |
      | All authentication drivers have a user provider. This defines how the
      | users are actually retrieved out of your database or other storage
      | mechanisms used by this application to persist your user's data.
      |
      | If you have multiple user tables or models you may configure multiple
      | sources which represent each model / table. These sources may then
      | be assigned to any extra authentication guards you have defined.
      |
      | Supported: "database", "eloquent"
      |
     */
    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],
        //Artist user provider
        'artists' => [
            'driver' => 'eloquent',
            'model' => App\Models\Artist::class,
        ],
        //Member user provider
        'members' => [
            'driver' => 'eloquent',
            'model' => App\Models\Member\Member::class,
        ],
        //Model user provider
        'model_users' => [
            'driver' => 'eloquent',
            'model' => App\Models\Model\ModelUser::class,
        ],
     'users' => [
            'driver' => 'database',
            'table' => 'users',
        ],
    ],
    /*
      |--------------------------------------------------------------------------
      | Resetting Passwords
      |--------------------------------------------------------------------------
      |
      | You may specify multiple password reset configurations if you have more
      | than one user table or model in the application and you want to have
      | separate password reset settings based on the specific user types.
      |
      | The expire time is the number of minutes that the reset token should be
      | considered valid. This security feature keeps tokens short-lived so
      | they have less time to be guessed. You may change this as needed.
      |
     */
    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        //Artist password broker
        'artists' => [
            //user provider for artist
            'provider' => 'artists',
            //table to store password reset tokens for seller
            'table' => 'artist_password_resets',
            //expire time for these tokens in minutes
            'expire' => 60,
        ],
        //Members password broker
        'members' => [
            //user provider for members
            'provider' => 'members',
            //table to store password reset tokens for seller
            'table' => 'member_password_resets',
            //expire time for these tokens in minutes
            'expire' => 60,
        ],
        //Models password broker
        'models' => [
            //user provider for model
            'provider' => 'model_users',
            //table to store password reset tokens for seller
            'table' => 'model_password_resets',
            //expire time for these tokens in minutes
            'expire' => 60,
        ],
    ],
];
