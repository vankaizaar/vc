<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'WelcomeController@index');

//Auth::routes();

Route::get('/home', 'HomeController@index');

//ARTISTS ROUTES
//Logged in users/artist cannot access or send requests to these pages
Route::group(['middleware' => 'artist_guest'], function() {
    //register artist
    Route::get('artist_register', 'ArtistAuth\RegisterController@showRegistrationForm');
    Route::post('artist_register', 'ArtistAuth\RegisterController@register');
    //login artist
    Route::get('artist_login', 'ArtistAuth\LoginController@showLoginForm');
    Route::post('artist_login', 'ArtistAuth\LoginController@login');
    //Artist Password reset routes
    Route::get('artist_password/reset', 'ArtistAuth\ForgotPasswordController@showLinkRequestForm');
    Route::post('artist_password/email', 'ArtistAuth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('artist_password/reset/{token}', 'ArtistAuth\ResetPasswordController@showResetForm');
    Route::post('artist_password/reset', 'ArtistAuth\ResetPasswordController@reset');
});

//Only logged in artists can access or send requests to these pages
Route::group(['middleware' => 'artist_auth'], function() {
    Route::post('artist_logout', 'ArtistAuth\LoginController@logout');
    Route::get('/artist_home', function() {
        return view('artist.home');
    });
    Route::resource('audio', 'Artist\AudioController');
    Route::resource('profile', 'Artist\ProfileController');
    Route::resource('avatar', 'Artist\AvatarController');
    Route::resource('cover', 'Artist\CoverController');
    Route::get('settings/{artist}/edit', 'Artist\SettingController@edit')->name('settings.edit');
    Route::patch('settings/{artist}', 'Artist\SettingController@update')->name('settings.update');
//    Route::get('jobs/listing', 'Member\JobController@listActiveJobs')->name('jobs.active');
//    Route::get('jobs/listing', 'Member\JobController@searchActiveJobs')->name('jobs.search');
//    Route::resource('jobs', 'Member\JobController', ['only' => [
//            'show'
//    ]]);
//    Route::get('application/active', 'ApplicationController@listActiveApplication')->name('applications.active');
//    Route::resource('application', 'ApplicationController', ['only' => [
//            'store', 'destroy'
//    ]]);
//    Route::match(array('PUT','POST', 'PATCH'), "settings/{artist}", array(
//        'uses' => 'Artist\SettingController@updateSettings',
//        'as' => 'settings.update'
//    ));
});
//ARTISTS ROUTES END
//
////MEMBERS ROUTES
//Logged in users/members cannot access or send requests these pages
//Route::group(['middleware' => 'member_guest'], function() {
//    //register member
//    Route::get('member_register', 'MemberAuth\RegisterController@showRegistrationForm');
//    Route::post('member_register', 'MemberAuth\RegisterController@register');
//    //login member
//    Route::get('member_login', 'MemberAuth\LoginController@showLoginForm');
//    Route::post('member_login', 'MemberAuth\LoginController@login');
//    //Member Password reset routes
//    Route::get('member_password/reset', 'MemberAuth\ForgotPasswordController@showLinkRequestForm');
//    Route::post('member_password/email', 'MemberAuth\ForgotPasswordController@sendResetLinkEmail');
//    Route::get('member_password/reset/{token}', 'MemberAuth\ResetPasswordController@showResetForm');
//    Route::post('member_password/reset', 'MemberAuth\ResetPasswordController@reset');
//});
//
////Only logged in members can access or send requests to these pages
//Route::group(['middleware' => 'member_auth'], function() {
//    Route::post('member_logout', 'MemberAuth\LoginController@logout');
//    Route::get('/member_home', function() {
//        return view('member.home');
//    });
//    Route::resource('memberprofile', 'Member\ProfileController');
//    Route::resource('memberavatar', 'Member\AvatarController');
//    Route::resource('membercover', 'Member\CoverController');
//    Route::post('job/deactivate/{id}', 'Member\JobController@deactivate')->name('job.deactivate'); //this route must be before the resource below
//    Route::post('job/activate/{id}', 'Member\JobController@activate')->name('job.activate'); //this route must be before the resource below
//    Route::resource('job', 'Member\JobController');
//    Route::get('membersettings/{member}/edit', 'Member\SettingController@edit')->name('membersettings.edit');
//    Route::patch('membersettings/{member}', 'Member\SettingController@update')->name('membersettings.update');
//    Route::get('applications/active', 'ApplicationController@listActiveApplicationMember')->name('applications.submitted');
//    Route::get('applications/hire/{id}', 'ApplicationController@showHiringForm')->name('hire.create');
//    Route::post('applications/hire', 'ApplicationController@processHiringForm')->name('hire.store');
//    Route::patch('applications/accept/{application}', 'ApplicationController@acceptApplication')->name('applications.accept');
//    Route::patch('applications/reject/{application}', 'ApplicationController@rejectApplication')->name('applications.reject');
//    Route::get('artists/listing', 'Artist\ArtistController@searchActiveArtists')->name('artists.search');
//    Route::resource('artists', 'Artist\ArtistController', ['only' => [
//            'show'
//    ]]);
//});
//MEMBERS ROUTES END
//MODELS ROUTES
//Logged in models cannot access or send requests to these pages
Route::group(['middleware' => 'model_guest'], function() {
    //register model
    Route::get('model_register', 'ModelAuth\RegisterController@showRegistrationForm');
    Route::post('model_register', 'ModelAuth\RegisterController@register');
    //login model
    Route::get('model_login', 'ModelAuth\LoginController@showLoginForm');
    Route::post('model_login', 'ModelAuth\LoginController@login');
    //Model Password reset routes
    Route::get('model_password/reset', 'ModelAuth\ForgotPasswordController@showLinkRequestForm');
    Route::post('model_password/email', 'ModelAuth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('model_password/reset/{token}', 'ModelAuth\ResetPasswordController@showResetForm');
    Route::post('model_password/reset', 'ModelAuth\ResetPasswordController@reset');
});

//Only logged in artists can access or send requests to these pages
Route::group(['middleware' => 'model_auth'], function() {
    Route::post('model_logout', 'ModelAuth\LoginController@logout');
    Route::get('/model_home', function() {
        return view('model.home');
    });
    Route::resource('audio', 'Model\AudioController');
    Route::resource('profile', 'Model\ProfileController');
    Route::resource('avatar', 'Model\AvatarController');
    Route::resource('cover', 'Model\CoverController');
    Route::get('settings/{artist}/edit', 'Model\SettingController@edit')->name('settings.edit');
    Route::patch('settings/{artist}', 'Model\SettingController@update')->name('settings.update');
//    Route::get('jobs/listing', 'Member\JobController@listActiveJobs')->name('jobs.active');
//    Route::get('jobs/listing', 'Member\JobController@searchActiveJobs')->name('jobs.search');
//    Route::resource('jobs', 'Member\JobController', ['only' => [
//            'show'
//    ]]);
//    Route::get('application/active', 'ApplicationController@listActiveApplication')->name('applications.active');
//    Route::resource('application', 'ApplicationController', ['only' => [
//            'store', 'destroy'
//    ]]);
//    Route::match(array('PUT','POST', 'PATCH'), "settings/{artist}", array(
//        'uses' => 'Artist\SettingController@updateSettings',
//        'as' => 'settings.update'
//    ));
});
//MODELS ROUTES END
//Route::resource('artist', 'Artist\ArtistController');
/* * *
  OTHER ROUTES BEGIN HERE
 * * */
//CONTACT US ROUTE
Route::post('contact-us', ['as' => 'contactus.store', 'uses' => 'ContactUSController@contactUSPost']);

//Policies
Route::get('privacy-policy', function () {
    return view('policies.privacy');
});

Route::get('terms-conditions', function () {
    return view('policies.terms');
});


//Pages
Route::get('about', function () {
    return view('pages.about');
});

//Subscibers 
Route::resource('subscribers', 'Subscriber\SubscriberController', ['only' => [
        'create', 'store'
]]);




