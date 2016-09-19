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
            $table->integer('oferta_id')->unsigned();
            $table->integer('ciudad_id')->unsigned();
            $table->string('direccion');
            $table->integer('habitacion');
            $table->integer('banho');
            $table->double('area', 15, 2);
            $table->boolean('parqueadero')->default('0');
            $table->boolean('piscina')->default('0');
            $table->boolean('cocina')->default('0');
            $table->boolean('zona_residencial')->default('0');
            $table->boolean('conjunto_cerrado')->default('0');
            $table->boolean('porteria')->default('0');
            $table->boolean('patio')->default('0');
            $table->boolean('antiguedad')->default('0');
            $table->integer('precio');
            $table->string('descripcion')->default('N/A');
            $table->boolean('estado')->default(1);

            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('cascade');
            $table->foreign('oferta_id')->references('id')->on('ofertas')->onDelete('cascade');
            $table->foreign('ciudad_id')->references('id')->on('ciudades')->onDelete('cascade');
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
