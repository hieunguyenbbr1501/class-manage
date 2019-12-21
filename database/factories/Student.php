<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Student::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'code' => $faker->randomNumber($nbDigits = 8, $strict = true),
        'remember_token' => Str::random(10),
        'dob' => $faker->date(),
        'gender' => 'male',
        'address' => $faker->address
    ];
});
