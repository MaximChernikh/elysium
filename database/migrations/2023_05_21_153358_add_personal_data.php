<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddPersonalData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::statement('ALTER TABLE users
            ADD country_id bigint UNSIGNED DEFAULT NULL AFTER updated_at,
            ADD gender boolean DEFAULT NULL AFTER country_id,
            ADD occupation varchar(255) DEFAULT NULL AFTER gender,
            ADD year_of_birth date DEFAULT NULL AFTER occupation,
            ADD FOREIGN KEY (country_id) REFERENCES countries (id) ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
