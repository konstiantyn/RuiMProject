<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaylistvideoclipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlistvideoclips', function (Blueprint $table) {
            $table->increments('pv_id');
            $table->integer('plist_id');
            $table->integer('vd_id');
            $table->integer('pv_del');
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
        Schema::drop('playlistvideoclips');
    }
}
