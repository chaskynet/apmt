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
        Schema::create('inven_sis_riegos', function (Blueprint $table) {
            $table->id();
            $table->string('DEPARTAMENTO');
            $table->integer('SISTEM_FUNC_N');
            $table->decimal('SISTEM_FUNC_PERCENT',5,2);
            $table->integer('USUARIOS_FAM_N');
            $table->decimal('USUARIOS_FAM_PERCENT',5,2);
            $table->integer('AREA_HA');
            $table->decimal('AREA_PERCENT',5,2);
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
        Schema::dropIfExists('inven_sis_riegos');
    }
};
