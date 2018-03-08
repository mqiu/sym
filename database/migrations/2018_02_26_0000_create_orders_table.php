<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('customer_id')->unsigned()->index('customer_id')->foreign('customer_id')->references('id')->on('customers');
            $table->integer('address_id')->unsigned()->index('address_id')->foreign('address_id')->references('id')->on('customer_addresses');
            $table->decimal('total_price', 7, 2);
            $table->dateTime('order_date');
            $table->dateTime('shipping_date')->nullable();
            $table->tinyInteger('fully_shipped')->default(0);
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
