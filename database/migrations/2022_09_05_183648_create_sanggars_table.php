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
            $table->id();
            // $table->unsignedBigInteger('users_id')->index('sanggars_users_id_foreign'); masih ??
            $table->string('nama_sanggar');
            $table->string('alamat');
            $table->string('deskripsi');
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
