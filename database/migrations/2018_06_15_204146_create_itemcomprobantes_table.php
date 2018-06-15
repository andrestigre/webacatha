<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemcomprobantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemcomprobantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_comprobante')->nullable();
            $table->text('contenido')->nullable();
            $table->string('efecto')->nullable();
            $table->boolean('estado')->default(1);
            $table->boolean('textalinear')->default(1);
            $table->integer('comprobante_id')->unsigned();
            $table->foreign('comprobante_id')->references('id')->on('comprobantes');
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
        Schema::drop('itemcomprobantes');
    }
}
