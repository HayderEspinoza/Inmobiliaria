<?php

use Illuminate\Database\Seeder;
use Negocio\Entities\Tipo;

class TipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = ['APARTAMENTO', 'APARTA ESTUDIO', 'CASA', 'PROYECTOS', 'LOCAL', 'OFICINAS', 'BODEGAS', 'LOTE', 'FINCA', 'BODEGA', 'LOCAL'];

        foreach ($tipos as $key => $item) {
        	$tipo = new Tipo();
        	$tipo->nombre = $item;
        	$tipo->descripcion = 'N/A';
        	$tipo->save();
        }
    }
}
