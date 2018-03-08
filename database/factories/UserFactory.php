<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'username' => $faker->userName,
        'name'     => $faker->name,
        'email'    => $faker->unique()->safeEmail,
        'chatId' => $faker->unique()->phoneNumber,
        'password' => $faker->password(7,8), // secret
        'lastUpdate' => date('2000-01-01 00:00:00'),
    ];
});
