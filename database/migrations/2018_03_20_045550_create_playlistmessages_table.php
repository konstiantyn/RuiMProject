<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaylistmessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlistmessages', function (Blueprint $table) {
            $table->increments('pm_id');
            $table->integer('pm_type');
            $table->integer('pm_foreign_id');
            $table->integer('pm_del');
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
        Schema::drop('playlistmessages');
    }
}
