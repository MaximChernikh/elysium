<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE password_resets (
    email varchar(255) NOT NULL,
    token varchar(255) NOT NULL UNIQUE,
    email_verified_at TIMESTAMP DEFAULT NULL,
    password varchar(255) NOT NULL,
    remember_token varchar(100) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT NULL,
    updated_at TIMESTAMP DEFAULT NULL,
    INDEX password_resets_email_index (email))

');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP IF EXISTS TABLE password_resets ');
    }
};
