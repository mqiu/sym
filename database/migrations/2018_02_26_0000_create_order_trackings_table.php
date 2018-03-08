<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_tracking', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('order_id')->unsigned()->index('order_id')->foreign('order_id')->references('id')->on('orders');
            $table->integer('product_id_list');
            $table->string('tracking', 64)->nullable();
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
        Schema::dropIfExists('order_tracking');
    }
}
