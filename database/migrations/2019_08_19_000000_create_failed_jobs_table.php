<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE failed_jobs (
    id bigint UNSIGNED PRIMARY KEY NOT NULL,
    uuid varchar(255) NOT NULL UNIQUE,
    connection text NOT NULL,
    queue text NOT NULL,
    payload longtext NOT NULL,
    exception longtext NOT NULL,
    failed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)
 ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
}
