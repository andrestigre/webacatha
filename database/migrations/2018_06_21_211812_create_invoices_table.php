<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 Schema::create('invoices', function (Blueprint $table) {
                 $table->increments('id');
                 $table->string('title')->nullable();
                 $table->double('price', 15,2);
                 $table->string('payment_status')->nullable();
                 $table->string('pack')->nullable();
                 $table->text('detall')->nullable();
                 $table->string('periodo')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
