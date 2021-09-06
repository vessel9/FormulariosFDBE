<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsulinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insulinas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 30)->comment('Nombre de la Insulina Basal que utiliza (insulina de acción prolongada o intermedia) ó (insulina prandial/bolus) insulina ráida o ultrarápida');
            $table->string('tipo', 25)->comment('Tipo de Insulina (Basal o Prandial/bolus)');
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
        Schema::dropIfExists('insulinas');
    }
}
