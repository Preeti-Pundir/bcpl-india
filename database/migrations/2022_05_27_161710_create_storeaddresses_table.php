<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreaddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storeaddresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('store_id')->references('id')->on('stores');
            $table->foreignId('city_id')->references('id')->on('cities');
            $table->string('storename');
            $table->string('storeaddress');
            $table->string('pincode');
            $table->string('email');
            $table->string('no');
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
        Schema::dropIfExists('storeaddresses');
    }
}
