<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('titulo')->nullable();
            $table->text('contenido')->nullable();
            $table->string('enlaceboton')->nullable();
            $table->string('textoboton')->nullable();
            $table->text('social_fb')->nullable();
            $table->text('social_tw')->nullable();
            $table->text('social_gg')->nullable();
            $table->text('social_in')->nullable();
            $table->text('latitud')->nullable();
            $table->text('longitud')->nullable();
            $table->string('section_color');
            $table->boolean('estado')->default(1);
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
        Schema::drop('contactos');
    }
}
