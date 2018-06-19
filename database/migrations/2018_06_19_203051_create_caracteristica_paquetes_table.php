<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaracteristicaPaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristica_paquetes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('car_paquete')->nullable();
            $table->boolean('estado')->default(1);
            $table->integer('paquete_id')->unsigned();
            $table->foreign('paquete_id')->references('id')->on('paquetes');
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
        Schema::drop('caracteristica_paquetes');
    }
}
