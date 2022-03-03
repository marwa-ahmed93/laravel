<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Setting;
use Faker\Generator as Faker;

$factory->define(Setting::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'img' => $faker->img,
        'logo' => $faker->logo,
        'favicon' => $faker->favicon,
        'city'    => $faker->city,
        'address' => $faker->address,
        'phone' => $faker->phone,
        'work_hours' => $faker->work_hours,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'map' => $faker->map,
        'fb' => $faker->fb,
        'twitter' => $faker->twitter,
        'insta' => $faker->insta,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
