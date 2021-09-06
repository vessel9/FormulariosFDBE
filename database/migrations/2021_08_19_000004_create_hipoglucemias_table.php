<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHipoglucemiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hipoglucemias', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad')->comment('Cuantas hipoglucemias(glucosa de 70mg/dl) tuvo la pasada semana?(veces)');
            $table->integer('sintoma')->comment('Presenta el Paciente sintomas de hipoglucemia?');
            $table->integer('mas_baja')->comment('Número más bajo de hipoglucemia');
            $table->integer('hace_frente_hipoglucemia')->comment('Que hace cuando tiene hipoglucemias?');
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
        Schema::dropIfExists('hipoglucemias');
    }
}
