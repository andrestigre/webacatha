<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('detalle')->nullable();
            $table->string('periodo')->nullable();
            $table->double('precio',15,2)->nullable();
            $table->boolean('estado')->default(1);
            $table->integer('tipopaquete_id')->unsigned();
            $table->foreign('tipopaquete_id')->references('id')->on('tipopaquetes');
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
        Schema::drop('paquetes');
    }
}
