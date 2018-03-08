<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\User::class, 5)->create();
        //factory(App\Http\models\Product::class, 5)->create();
        //factory(App\Http\models\Customer::class, 5)->create();
        factory(App\Http\models\CustomerAddress::class, 5)->create();
    }
}
