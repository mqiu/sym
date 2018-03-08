<?php
use Faker\Generator as Faker;

$factory->define(App\Http\models\Customer::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'chat_id'   => $faker->numberBetween(100,500),
        'email'     => $faker->email,
        'phone_number' => $faker->phoneNumber,
        'password' => $faker->password,
    ];
});
    