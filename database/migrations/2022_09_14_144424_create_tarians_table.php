<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('kategori_id')->index('tarians_kategori_id_foreign');
            $table->string('nama_tari');
            $table->string('pencipta_tari');
            $table->string('penata_tabuh')->nullable();
            $table->string('tahun_cipta');
            $table->string('jenis_tarian');
            $table->string('jumlah_penari');
            $table->string('pakaian')->nullable();
            $table->longText('deskripsi');
            $table->longText('sejarah')->nullable();
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
        Schema::dropIfExists('tarians');
    }
}
