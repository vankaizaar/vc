<?php

/*
  |--------------------------------------------------------------------------
  | Model Factories
  |--------------------------------------------------------------------------
  |
  | Here you may define all of your model factories. Model factories give
  | you a convenient way to create models for testing and seeding your
  | database. Just tell the factory how a default model should look.
  |
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Artist::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Profile::class, function (Faker\Generator $faker) {
    return [
        'dob' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'country' => $faker->country,
        'city' => $faker->city,
        'telephone' => $faker->phoneNumber,
        'about' => $faker->text(200),
        'gender' => $faker->boolean(),
        'native_language' => $faker->randomElement($array = array('English', 'French', 'Swahili')),
        'voice_categories' => $faker->words($nb = 3, $asText = true),
        'project_5000_time' => $faker->randomDigitNotNull,
        'project_500_time' => $faker->randomDigitNotNull,
        'project_50_time' => $faker->randomDigitNotNull,
        'project_5_time' => $faker->randomDigitNotNull,
        'project_5000_cost' => $faker->numberBetween($min = 1000, $max = 9000),
        'project_500_cost' => $faker->numberBetween($min = 500, $max = 1000),
        'project_50_cost' => $faker->numberBetween($min = 100, $max = 500),
        'project_5_cost' => $faker->numberBetween($min = 10, $max = 90),
    ];
});

$factory->define(App\Models\Audio::class, function (Faker\Generator $faker) {
    return [
        'link' => $faker->randomElement($array = array('public/audio/vankaizaar101/1.mp3', 'public/audio/vankaizaar101/2.mp3')),
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'about_sample' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'type' => $faker->randomElement($array = array('TV Commercial', 'Radio Ad', 'Phone Prompt')),
        'language' => $faker->randomElement($array = array('English', 'French', 'Swahili'))
    ];
});

$factory->define(App\Models\Cover::class, function (Faker\Generator $faker) {
    return [
        'link' => 'public/defaults/covers/cover.jpg',
    ];
});

$factory->define(App\Models\Avatar::class, function (Faker\Generator $faker) {
    return [
        'link' => $faker->randomElement($array = array('public/defaults/avatars/male.svg', 'public/defaults/avatars/female.svg')),
    ];
});




$factory->define(App\Models\Member\Member::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Member\Job::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->jobTitle,
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});

$factory->define(App\Models\Member\MemberCover::class, function (Faker\Generator $faker) {
    return [
        'link' => 'public/defaults/covers/cover.jpg',
    ];
});

$factory->define(App\Models\Member\MemberAvatar::class, function (Faker\Generator $faker) {
    return [
        'link' => $faker->randomElement($array = array('public/defaults/avatars/male.svg', 'public/defaults/avatars/female.svg')),
    ];
});

$factory->define(App\Models\Member\MemberProfile::class, function (Faker\Generator $faker) {
    return [
        'dob' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'country' => $faker->country,
        'city' => $faker->city,
        'telephone' => $faker->phoneNumber,
        'gender' => $faker->boolean()
    ];
});

/* Models Factory */
$factory->define(App\Models\Model\ModelUser::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Model\ModelProfile::class, function (Faker\Generator $faker) {
    return [
        'dob' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'country' => $faker->country,
        'city' => $faker->city,
        'telephone' => $faker->phoneNumber,
        'about' => $faker->text(200),
        'gender' => $faker->boolean(),                
    ];
});

$factory->define(App\Models\Model\ModelBillingInfo::class, function (Faker\Generator $faker) {
    return [
        'project_hourly_cost' => $faker->numberBetween($min = 100, $max = 500),
        'project_half_day_cost' => $faker->numberBetween($min = 500, $max = 1000),
        'project_full_day_cost' => $faker->numberBetween($min = 1000, $max = 2000),
    ];
});

$factory->define(App\Models\Model\ModelAlbum::class, function (Faker\Generator $faker) {
    return [        
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'about_album' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'type' => $faker->randomElement($array = array('TV Commercial', 'Product Shoot', 'Fashion')),        
    ];
});

$factory->define(App\Models\Model\ModelPicture::class, function (Faker\Generator $faker) {
    return [
        'link' => $faker->imageUrl($width = 640, $height = 480),        
    ];
});

$factory->define(App\Models\Model\ModelCover::class, function (Faker\Generator $faker) {
    return [
        'link' => 'public/defaults/covers/cover.jpg',
    ];
});

$factory->define(App\Models\Model\ModelAvatar::class, function (Faker\Generator $faker) {
    return [
        'link' => $faker->randomElement($array = array('public/defaults/avatars/male.svg', 'public/defaults/avatars/female.svg')),
    ];
});
