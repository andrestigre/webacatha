<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->double('price')->nullable();
            $table->string('pack')->nullable();
            $table->string('payment_status');
            $table->text('detall')->nullable();
            $table->string('tipopaquete_id')->nullable();
            $table->string('tipo_paquete')->nullable();
            $table->string('cli_nombre')->nullable();
            $table->string('cli_email')->nullable();
            $table->string('cli_contacto')->nullable();
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
        Schema::drop('review_invoices');
    }
}
