<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('msg_id');
            $table->string('msg_text');
            $table->integer('msg_effect');
            $table->integer('msg_speed');
            $table->integer('msg_duration');
            $table->integer('msg_xpos');
            $table->integer('msg_ypos');
            $table->string('msg_fonttype');
            $table->integer('msg_fontsize');
            $table->string('msg_fontcolor');
            $table->integer('msg_del');
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
        Schema::drop('messages');
    }
}
