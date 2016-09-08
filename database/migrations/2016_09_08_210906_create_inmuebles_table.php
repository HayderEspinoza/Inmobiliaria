<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_id')->unsigned();
            $table->integer('ciudad_id')->unsigned();
            $table->string('direccion');
            $table->integer('habitacion');
            $table->integer('banho');
            $table->double('area', 15, 2);
            $table->integer('parqueadero');
            $table->integer('piscina');
            $table->integer('cocina');
            $table->integer('zona_residencial');
            $table->boolean('conjunto_cerrado');
            $table->integer('porteria');
            $table->integer('patio');
            $table->integer('antiguedad');
            $table->bigInteger('precio');
            $table->string('descripcion');
            $table->boolean('estado')->default(1);

            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->foreign('ciudad_id')->references('id')->on('ciudades');
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
        Schema::drop('inmuebles');
    }
}
