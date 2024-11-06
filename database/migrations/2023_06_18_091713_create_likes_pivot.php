<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesPivot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE TABLE likes_pivot (
        article_id bigint UNSIGNED NOT NULL,
        user_id bigint UNSIGNED NOT NULL,
        is_liked boolean DEFAULT NULL,
        FOREIGN KEY(user_id) REFERENCES users(id),
        FOREIGN KEY(user_id) REFERENCES articles(id))
     ');
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes_pivot');
    }
}
