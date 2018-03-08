<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('payment_sequence')->default(1);
            $table->integer('order_id')->unsigned()->index('order_id')->foreign('order_id')->references('id')->on('orders');
            $table->tinyInteger('status')->default(1);  // 0 similar, 1:: parent 2:child
            $table->unique(['order_id','payment_sequence']);
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
        Schema::dropIfExists('order_payments');
    }
}
