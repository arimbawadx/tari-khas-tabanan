<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryUpdateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_update_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('items_id')->index('history_update_items_items_id_foreign');
            $table->date('update_date');
            $table->string('update_title');
            $table->string('update_info');
            $table->string('update_description');
            $table->string('update_image', 225)->nullable();
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
        Schema::dropIfExists('history_update_items');
    }
}
