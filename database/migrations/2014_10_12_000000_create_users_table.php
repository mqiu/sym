<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->increments('id', 10)->unsigned();
            $table->string('username', 64)->unique();
            $table->string('name', 128);
            $table->string('email', 128)->unique()->nullable();
            $table->string('chatId', 256)->unique()->nullable();
            $table->string('password', 64);
            $table->tinyInteger('status')->default(0);
            $table->dateTime('lastUpdate');
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
        Schema::dropIfExists('users');
    }
}
