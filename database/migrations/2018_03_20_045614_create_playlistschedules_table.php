<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaylistschedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlistschedules', function (Blueprint $table) {
            $table->increments('ps_id');
            $table->integer('plist_id');
            $table->time('ps_start');
            $table->integer('ps_delay');
            $table->boolean('ps_loop');
            $table->string('ps_days');
            $table->string('ps_months');
            $table->integer('ps_del');
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
        Schema::drop('playlistschedules');
    }
}
