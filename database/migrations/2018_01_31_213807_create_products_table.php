<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->increments('id', 10)->unsigned();
            $table->string('product_mame', 256)->default('')->index('product_name');
            $table->longText('description')->nullable();
            $table->decimal('price',7,2)->default(0);
            $table->text('images')->nullable();  // switch to use its own table later
            $table->dateTime('live_date')->nullable();
            $table->dateTime('deactivate_date')->nullable();
            //$table->string('product_relation')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('products');
    }
}
