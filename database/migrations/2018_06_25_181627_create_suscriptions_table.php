<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('namesuscripcion')->nullable();
            $table->text('emailsuscripcion')->nullable();
            $table->string('telefonosuscripcion')->nullable();
            $table->boolean('estado')->default(1);
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
        Schema::drop('suscriptions');
    }
}
