<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customers_id')->index('projects_customers_id_foreign');
            $table->unsignedBigInteger('programmers_id')->nullable()->index('projects_programmers_id_foreign');
            $table->string('project_name');
            $table->string('progress_status');
            $table->integer('project_progress');
            $table->date('project_start')->nullable();
            $table->date('project_deadline');
            $table->date('project_finished')->nullable();
            $table->string('project_URL')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
