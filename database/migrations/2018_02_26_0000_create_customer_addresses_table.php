<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_addresses', function (Blueprint $table) {
            //$table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('customer_id')->unsigned()->index('customer_id')->foreign("customer_id")->references('id')->on('customers')->onDelete('cascade');
            $table->string('country',8)->default('CN');
            $table->string('province',24);
            $table->string('city', 64);
            $table->string('district',128)->default('');
            $table->string('street', 256);
            $table->string('street2', 256);
            $table->string('postal_code', 6)->index('postal_code');
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
        Schema::dropIfExists('customer_addresses');
    }
}
