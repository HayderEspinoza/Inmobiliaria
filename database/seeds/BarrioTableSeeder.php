<?php

use Illuminate\Database\Seeder;
use Negocio\Entities\Barrio;
class BarrioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barrios = ['Manga', 'Bocagrande', 'Castillo Grande', 'Laguito', 'Cabrero', 'Marbella', 'Crespo', 'Boquilla', 'Otro'];

        foreach ($barrios as $key => $tmp) {
        	$barrio = new Barrio();
        	$barrio->nombre = $tmp;
        	$barrio->save();
        }
    }
}
