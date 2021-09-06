<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHemoglobinaGlicosiladasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hemoglobina_glicosiladas', function (Blueprint $table) {
            $table->id();
            $table->string('valor', 60)->comment('Valor del Examen de Hemoglobina Glicosilada (HbA1c)%');
            $table->date('fecha_ultimo_examen');
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
        Schema::dropIfExists('hemoglobina_glicosiladas');
    }
}
