<?php
use Faker\Generator as Faker;

$factory->define(App\Http\models\CustomerAddress::class, function (Faker $faker) {
    $users = App\Http\models\Customer::all('id')->pluck('id')->toArray();
    return [
        'customer_id' => $faker->randomElement($users),
        'country' => $faker->countryCode,
        'province'   => $faker->word,
        'city'     => $faker->city,
        'district' => $faker->city,
        'street' => $faker->streetAddress,
        'street2' => $faker->streetSuffix,
        'postal_code' => $faker->randomNumber(6),
    ];
});
    