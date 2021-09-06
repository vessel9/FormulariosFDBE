<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRepresentantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representantes', function (Blueprint $table) {
            $table->id();
            $table->string('cedula', 15);
            $table->string('nombres');
            $table->boolean('solicita_ayuda');
            $table->unsignedBigInteger('id_info_social')->unique();
            $table->foreign('id_info_social')
                ->references('id')->on('informacion_socials')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE `representantes` comment 'Información Básica Representante'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representantes');
    }
}
