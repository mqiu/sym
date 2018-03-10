<?php
use Faker\Generator as Faker;

$factory->define(App\Http\models\Order::class, function (Faker $faker) {
    $users = App\Http\models\CustomerAddress::all(['id','customer_id'])->toArray();
    $testUser = $faker->randomElement($users);
    return [
        'customer_id' => $testUser['customer_id'],
        'address_id' => $testUser['id'],
        'total_price'   => $faker->randomFloat(2, 10, 10000),
        'order_date'     => $faker->dateTime,
        'shipping_date' => $faker->dateTime,
    ];
});
    