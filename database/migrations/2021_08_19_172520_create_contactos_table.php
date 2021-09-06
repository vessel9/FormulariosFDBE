<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->string('convencional', 10)->nullable();
            $table->string('celular', 15);
            $table->unsignedBigInteger('id_paciente')->nullable()->unique();
            $table->foreign('id_paciente')->nullable()
                ->references('id')->on('pacientes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_representante')->nullable()->unique();
            $table->foreign('id_representante')->nullable()
                ->references('id')->on('representantes')
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
        Schema::dropIfExists('contactos');
    }
}
