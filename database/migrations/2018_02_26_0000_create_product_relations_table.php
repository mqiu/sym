<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_relations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned()->index('product_id')->foreign('product_id')->reference('id')->on('products');
            $table->integer('related_product_id')->unsigned()->index('related_product_id')->foreign('related_product_id')->reference('id')->on('products');
            $table->tinyInteger('relation')->default(0);  // 0 similar, 1:: parent 2:child
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
        Schema::dropIfExists('product_relations');
    }
}
