<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'id' => 'd5152030',
        'fname' => 'Admin',
        'lname' => '',
        'email' => 'admin@gmail.com',
        'mobile' => '0000000000',
        'gender' => 'male',
        'email_verified' => 1,
        'mobile_verified' => 1,
        'user_type' =>$faker->randomElement(['admin']),
        'status' => 1,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),

    ];
});
