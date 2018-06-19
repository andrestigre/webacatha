<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemsoportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemsoportes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('item_soporte')->nullable();
            $table->text('titulo')->nullable();
            $table->text('contenido')->nullable();
            $table->text('enlace')->nullable();
            $table->text('tituloenlace')->nullable();
            $table->text('icono')->nullable();
            $table->string('tituloanexo')->nullable();
            $table->string('textoanexo')->nullable();
            $table->boolean('estado')->default(1);
            $table->integer('soporte_id')->unsigned();
            $table->foreign('soporte_id')->references('id')->on('soportes');
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
        Schema::drop('itemsoportes');
    }
}
