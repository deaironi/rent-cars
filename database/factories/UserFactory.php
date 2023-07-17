<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

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
        'name' => 'administrator',
        'email' => 'deaironi@gmail.com',
        'nik' => 'ARN181-11060',
        'password' => Hash::make('ARN181-11060'),
        'phone' => '082111011962',
        'address' => 'JL CUMI-CUMI RAYA No 16',
    ];
});
