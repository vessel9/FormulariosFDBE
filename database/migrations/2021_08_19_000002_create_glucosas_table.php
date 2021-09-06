<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlucosasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glucosas', function (Blueprint $table) {
            $table->id();
            $table->integer('veces_mide_glucosa')->comment('Cuantas veces mide la glucosa al día?');
            $table->string('tiene_registro_glucosa', 50)->nullable()->comment('Lleva un registro escrito de la glucosa?');
            $table->string('puede_medir_glucosa', 50)->nullable()->comment('Lleva un registro escrito de la glucosa?');
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
        Schema::dropIfExists('glucosas');
    }
}
