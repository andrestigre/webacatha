<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',25)->nullable();
            $table->text('itemuno',25)->nullable();
            $table->text('itemdos',25)->nullable();
            $table->text('itemtres',25)->nullable();
            $table->text('itemcuatro',25)->nullable();
            $table->text('detalle',70)->nullable();
            $table->text('imagen')->nullable();
            $table->boolean('video_background')->default(1);
            $table->text('enlace_video')->nullable();
            $table->boolean('estado')->default(1);
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
        Schema::drop('sliders');
    }
}
