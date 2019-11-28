<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSurtirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surtirs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('empleado_id')->unsigned();
            $table->integer('maquina_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->date('fechaRealizada')->nullable();
            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('maquina_id')->references('id')->on('maquinas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('surtirs');
    }
}
