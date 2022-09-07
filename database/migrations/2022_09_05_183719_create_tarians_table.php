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
            $table->id();
            // $table->unsignedBigInteger('videos_id')->index('tarians_videos_id_foreign'); masih ?? harusnya tidak
            // $table->unsignedBigInteger('photos_id')->index('tarians_photos_id_foreign'); masih ?? harusnya tidak
            $table->unsignedBigInteger('kategoris_id')->index('tarians_kategoris_id_foreign');
            // $table->unsignedBigInteger('sanggars_id')->index('tarians_sanggars_id_foreign'); masih ??
            $table->string('nama_tari');
            $table->string('pencipta_tari');
            $table->string('penata_tabuh');
            $table->string('tahun_cipta');
            $table->string('jenis_tarian');
            $table->string('jumlah_penari');
            $table->string('pakaian');
            $table->string('deskripsi');
            $table->string('sejarah');
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
