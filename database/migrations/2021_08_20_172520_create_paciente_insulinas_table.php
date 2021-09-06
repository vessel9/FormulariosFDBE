<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteInsulinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente_insulinas', function (Blueprint $table) {
            $table->id();
            $table->string('dosis', 50)->comment('Dosis de la Insulina que utiliza el Paciente');
            $table->unsignedBigInteger('id_insulina')->unique();
            $table->foreign('id_insulina')
                ->references('id')->on('insulinas')
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
        Schema::dropIfExists('paciente_insulinas');
    }
}
