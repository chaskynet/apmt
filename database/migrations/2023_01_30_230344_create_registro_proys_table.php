<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_proys', function (Blueprint $table) {
            $table->id();
            $table->string('TIPO_REG');
            $table->string('INSTITUCION');
            $table->string('TIPO_INST');
            $table->string('NOMBRE_CONT');
            $table->string('APELLIDO_CONT');
            $table->string('CARGO');
            $table->string('DIRECCION');
            $table->string('CIUDAD');
            $table->string('TELF');
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
        Schema::dropIfExists('registro_proys');
    }
};
