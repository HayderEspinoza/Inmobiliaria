<?php

use Illuminate\Database\Seeder;
use Negocio\Entities\Oferta;
class OfertaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ofertas = ['Arriendo', 'Venta'];
        foreach ($ofertas as $key => $value) {
        	$oferta = new Oferta();
	        $oferta->nombre = $value;
	        $oferta->descripcion = 'NA';
	        $oferta->save();
        }

    }
}
