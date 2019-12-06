<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('maquina_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->integer('cantidad')->nullable();
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('maquina_id')->references('id')->on('maquinas')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stocks');
    }
}
