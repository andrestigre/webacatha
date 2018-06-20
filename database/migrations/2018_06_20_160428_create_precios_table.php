<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precios', function (Blueprint $table) {
            $table->increments('id');
            $table->text('contenido')->nullable();
            $table->string('section_color');
            $table->boolean('activo')->default(1);
            $table->string('enlace')->nullable();
            $table->integer('itemnav_id')->unsigned();
            $table->foreign('itemnav_id')->references('id')->on('itemnavs');
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
        Schema::drop('precios');
    }
}
