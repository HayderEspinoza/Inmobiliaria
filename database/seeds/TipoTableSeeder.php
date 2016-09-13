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
        $tipos = ['Apartamento', 'Aparta Estudio', 'Casa', 'Proyectos', 'Local', 'Oficinas', 'Bodegas', 'Lote', 'Finca'];

        foreach ($tipos as $key => $item) {
        	$tipo = new Tipo();
        	$tipo->nombre = $item;
        	$tipo->descripcion = 'N/A';
        	$tipo->save();
        }
    }
}
