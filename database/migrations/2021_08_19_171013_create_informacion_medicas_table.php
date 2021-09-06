<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacionMedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacion_medicas', function (Blueprint $table) {
            $table->id();
            $table->string('nombres_Medico', 200)->comment('Nombre del Médico especialista en diabetes');
            $table->date('fecha_ultima_cita')->nullable()->comment('fecha de la última cita al médico');
            $table->string('otra_enfermedad', 200)->comment('Otra enfermedad del paciente');
            $table->string('hospital', 200);
            $table->string('tipo_hospital', 100)
                ->comment('¿El Hospital donde se hace atender es? Público, Privado, IESS, ISSFA, ISSPOL, etc');
            $table->boolean('tiene_convulsiones');
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
        Schema::dropIfExists('informacion_medicas');
    }
}
