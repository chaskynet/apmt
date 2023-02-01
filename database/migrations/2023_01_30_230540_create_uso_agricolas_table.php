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
        Schema::create('uso_agricolas', function (Blueprint $table) {
            $table->id();
            $table->string('DEPARTAMENTO');
            $table->integer('PROYECTOS');
            $table->integer('AREA_HA');
            $table->integer('FAMILIAS');
            $table->integer('COST_BS');
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
        Schema::dropIfExists('uso_agricolas');
    }
};
