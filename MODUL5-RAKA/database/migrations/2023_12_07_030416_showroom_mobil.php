<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        schema::create('showroom_mobil', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mobil');
            $table->string('brand_mobil');
            $table->string('warna_mobil');
            $table->string('tipe_mobil');
            $table->integer('harga_mobil');
        });
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showroom_mobil');
    }
};
