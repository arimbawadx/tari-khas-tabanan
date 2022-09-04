<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProgressReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('progress_reports', function (Blueprint $table) {
            $table->foreign('customers_id')->references('id')->on('customers');
            $table->foreign('programmers_id')->references('id')->on('programmers');
            $table->foreign('projects_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('progress_reports', function (Blueprint $table) {
            $table->dropForeign('progress_reports_customers_id_foreign');
            $table->dropForeign('progress_reports_programmers_id_foreign');
            $table->dropForeign('progress_reports_projects_id_foreign');
        });
    }
}
