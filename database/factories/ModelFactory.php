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

use Carbon\Carbon;

$factory->define(SMDRide\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'username' => $faker->unique()->username,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(SMDRide\Ride::class, function (Faker\Generator $faker) {
    return [
        'address' => $faker->address,
        'car' => $faker->regexify('[A-Z]{3}\-[0-9]{4}'),
        'date' => $faker->dateTimeBetween(Carbon::now(), Carbon::today()->addMonths(2)),
    ];
});


$factory->define(SMDRide\Comment::class, function (Faker\Generator $faker) {
    return [
        'text' => $faker->text(200),
    ];
});
