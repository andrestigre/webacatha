<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipopaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipopaquetes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_paquete')->nullable();
            $table->text('detalle')->nullable();
            $table->text('enlace')->nullable();
            $table->text('totuloenlace')->nullable();
            $table->boolean('activo')->default(1);
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
        Schema::drop('tipopaquetes');
    }
}
