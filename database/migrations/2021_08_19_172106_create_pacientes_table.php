<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('cedula', 15)->unique();
            $table->string('nombres', 120);
            $table->string('apellidos', 120);
            $table->date('fecha_nacimiento');
            $table->string('email')->unique();
            $table->string('lugar_nacimiento', 50);
            $table->unsignedBigInteger('id_ciudad')->unique();
            $table->foreign('id_ciudad')
                ->references('id')->on('ciudades')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_diabetes')->unique();
            $table->foreign('id_diabetes')
                ->references('id')->on('diabetes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_representante')->nullable();
            $table->foreign('id_representante')->nullable()
                ->references('id')->on('representantes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_info_medica')->nullable()->unique();
            $table->foreign('id_info_medica')->nullable()
                ->references('id')->on('informacion_medicas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_hemoglobina')->nullable()->unique();
            $table->foreign('id_hemoglobina')->nullable()
                ->references('id')->on('hemoglobina_glicosiladas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_hipoglucemia')->nullable()->unique();
            $table->foreign('id_hipoglucemia')->nullable()
                ->references('id')->on('hipoglucemias')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_glucosa')->nullable()->unique();
            $table->foreign('id_glucosa')->nullable()
                ->references('id')->on('glucosas')
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
        Schema::dropIfExists('pacientes');
    }
}
