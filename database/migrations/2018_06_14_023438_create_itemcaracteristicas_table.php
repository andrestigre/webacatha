<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemcaracteristicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemcaracteristicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_caracteristica')->nullable();
            $table->string('detalle')->nullable();
            $table->string('iconuno')->nullable();
            $table->string('icondos')->nullable();
            $table->string('icontres')->nullable();
            $table->string('iconcuatro')->nullable();
            $table->string('iconcinco')->nullable();
            $table->string('iconseis')->nullable();
            $table->boolean('estado')->default(1);
            $table->integer('caracteristica_id')->unsigned();
            $table->foreign('caracteristica_id')->references('id')->on('caracteristicas');
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
        Schema::drop('itemcaracteristicas');
    }
}
