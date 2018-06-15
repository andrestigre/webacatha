<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaracteristicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristicas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('contenido')->nullable();
            $table->string('section_color')->nullable();
            $table->boolean('activo')->default(1);
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
        Schema::drop('caracteristicas');
    }
}
