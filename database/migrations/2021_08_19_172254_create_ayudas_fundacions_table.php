<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAyudasFundacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayudas_fundacions', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_ayuda')->comment('Tipo de ayuda que require el paciente');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE `ayudas_fundacions` comment 'Ayudas que ofrece la fundación'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ayudas_fundacions');
    }
}
