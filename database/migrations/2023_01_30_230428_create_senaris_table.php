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
        Schema::create('senaris', function (Blueprint $table) {
            $table->id();
            $table->string('TITULAR');
            $table->string('DEPARTAMENTO');
            $table->string('FUENTE');
            $table->string('TIPO_FUENTE');
            $table->string('OBRA');
            $table->string('TIPO_OBRA');
            $table->integer('SUPERFICIE_HA');
            $table->geometry('UTM')->nullable();
            $table->integer('FAMILIAS');
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
        Schema::dropIfExists('senaris');
    }
};
