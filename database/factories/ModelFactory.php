<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Phone::class, function (Faker\Generator $faker) {

    return [
        'marca' => $faker->words(1, true),
        'modelo' => $faker->words(2, true),
        'obs' => $faker->sentences(3, true),
        'valor' => $faker->randomNumber(3),
    ];
});
