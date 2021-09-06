<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateInformacionSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacion_socials', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad_familia')->comment('cuantas personas conforman la familia?');
            $table->integer('menores_edad')->comment('cuantos menores de edad hay en al familia?');
            $table->string('algun_discapacitado')->comment('Algun discapacitado en la familia, que tipo de discapacidad es?');
            $table->integer('personas_aportan')->comment('Personas que aportan economicamente al hogar');
            $table->string('situacion_cabeza_hogar', 40)->comment('El jefe de hogar actualmente es? (Empleado público, Privado, Negocio Propio, etc)');
            $table->string('zona_vive', 40)->comment('Zona donde vive (RURAL, URBANA)');
            $table->string('tipo_vivienda', 45)->comment('Tipo de Vivienda (Arrendada, Propia)');
            $table->string('problemas_diabetes')->comment('Cual es el principal problema para un buen cuidado y control de la diabetes?');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE `informacion_socials` comment 'Información Social del Representante'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informacion_socials');
    }
}
