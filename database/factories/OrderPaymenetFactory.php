<?php
use Faker\Generator as Faker;

$factory->define(App\Http\models\OrderPayment::class, function (Faker $faker) {
    return [
        'payment_sequence' => $faker->randomDigit,
        'order_id' => $faker->randomElement($orders),
    ];
});