<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemnavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemnavs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_nav',25)->nullable();
            $table->text('enlace')->nullable();
            $table->text('contenido')->nullable();
            $table->text('estilo')->nullable();
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
        Schema::drop('itemnavs');
    }
}
