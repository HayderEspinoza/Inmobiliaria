<?php

use Illuminate\Database\Seeder;
use Negocio\Entities\Ciudad;
class CiudadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ciudades = ['Cartagena', 'Barranquilla', 'Santa Marta', 'Bogota', 'Medellin'];

        foreach ($ciudades as $key => $item) {
        	$ciudad = new Ciudad();
        	$ciudad->nombre = $item;
        	$ciudad->descripcion = 'N/A';
        	$ciudad->save();
        }
    }
}
