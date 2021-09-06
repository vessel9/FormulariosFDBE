<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteAyudaFundacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente_ayuda_fundacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ayuda_fundacion')->unique();
            $table->foreign('id_ayuda_fundacion')
                ->references('id')->on('ayudas_fundacions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_paciente')->unique();
            $table->foreign('id_paciente')
                ->references('id')->on('pacientes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('paciente_ayuda_fundacions');
    }
}
