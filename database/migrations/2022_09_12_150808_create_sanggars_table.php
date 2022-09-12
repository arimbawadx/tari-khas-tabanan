<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanggarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanggars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_sanggar');
            $table->string('pemilik');
            $table->string('alamat');
            $table->string('titik_kordinat');
            $table->longText('deskripsi');
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
        Schema::dropIfExists('sanggars');
    }
}
