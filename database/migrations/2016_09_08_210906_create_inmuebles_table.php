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
            $table->integer('tipo_id')->unsigned()->nullable();
            $table->integer('oferta_id')->unsigned()->nullable();
            $table->integer('ciudad_id')->unsigned()->nullable();
            $table->integer('barrio_id')->unsigned()->nullable();
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
            
            $table->boolean('salon')->default('0');
            $table->boolean('cocineta')->default('0');
            $table->boolean('mezanine')->default('0');
            $table->boolean('cuarto_servicio')->default('0');
            $table->boolean('banho_servicio')->default('0');
            $table->boolean('locker')->default('0');
            $table->integer('precio');
            $table->string('descripcion')->default('N/A');
            $table->integer('destacado')->default(0);
            $table->boolean('estado')->default(1);

            $table->foreign('barrio_id')->references('id')->on('barrios')->onDelete('set null');
            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('set null');
            $table->foreign('oferta_id')->references('id')->on('ofertas')->onDelete('set null');
            $table->foreign('ciudad_id')->references('id')->on('ciudades')->onDelete('set null');
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
