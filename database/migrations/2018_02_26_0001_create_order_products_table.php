<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('order_id')->unsigned()->index('order_id')->foreign('order_id')->references('id')->on('orders');
            $table->integer('product_id')->unsigned()->index('product_id')->foreign('product_id')->references('id')->on('products');
            $table->tinyInteger('quantity')->unsigned()->default(1);
            $table->decimal('unit_price', 7, 2)->unsigned();
            $table->decimal('unit_discount', 7, 2)->unsigned()->default(0);
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
        Schema::dropIfExists('order_products');
    }
}
