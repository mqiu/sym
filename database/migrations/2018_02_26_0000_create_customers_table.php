<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('first_name', 128)->index('first_name');
            $table->string('last_name', 128)->index('last_name');
            $table->string('chat_id',256)->nullable()->index('chat_id');
            $table->string('email')->unique()->nullable()->index('email');
            $table->string('phone_number')->unique()->nullable()->index('phone_number');  // ?? really nullable
            $table->string('password', 64);
            $table->integer('credit_for')->unsigned()->nullable()->foreign('credit_for')->references('id')->on('users');
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
        Schema::dropIfExists('customers');
    }
}
