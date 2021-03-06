<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Empleado')->nullable();
            $table->string('UbicacionMaquina')->nullable();
            $table->string('CantidadAsignada')->nullable();
            $table->date('FechaEncargo')->nullable();
            $table->string('EstatusTrabajo');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trabajos');
    }
}
