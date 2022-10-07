<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreHasPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_has_pictures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('storeadress_id')->references('id')->on('storeaddresses')->onDelete('cascade');
            $table->foreignId('city_id')->references('id')->on('cities')->onDelete('cascade');
           $table->string('images');
           $table->string('videos');
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
        Schema::dropIfExists('store_has_pictures');
    }
}
