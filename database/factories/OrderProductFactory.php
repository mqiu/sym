<?php
use Faker\Generator as Faker;

$factory->define(App\Http\models\OrderProduct::class, function (Faker $faker) {
    $orders = App\Http\models\Order::all('id')->pluck('id')->toArray();
    $products = App\Http\models\Product::all('id')->pluck('id')->toArray();
    return [
        'order_id' => $faker->randomElement($orders),
        'product_id' => $faker->randomElement($products),
        'quantity'   => $faker->randomDigit,
        'unit_price'     => $faker->randomFloat(2,0.01,5000),
    ];
});    