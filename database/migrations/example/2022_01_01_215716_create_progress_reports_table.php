<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('report_code');
            $table->unsignedBigInteger('projects_id')->index('progress_reports_projects_id_foreign');
            $table->unsignedBigInteger('customers_id')->index('progress_reports_customers_id_foreign');
            $table->unsignedBigInteger('programmers_id')->index('progress_reports_programmers_id_foreign');
            $table->date('report_period');
            $table->integer('report_to');
            $table->date('report_date');
            $table->string('item_name');
            $table->integer('item_progress');
            $table->string('finishing_timeline');
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
        Schema::dropIfExists('progress_reports');
    }
}
