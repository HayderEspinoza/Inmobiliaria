<?php

namespace Negocio\Entities;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Intermediate
{
    protected $table = 'inmuebles as in';
    protected $fillable = ['tipo_id', 'ciudad_id', 'direccion', 'habitacion', 'banho', 'area', 'parqueadero', 'piscina', 'cocina', 'zona_residencial', 'conjunto_cerrado', 'porteria', 'patio', 'antiguedad', 'precio', 'descripcion', 'estado'];

    public function setParqueaderoAttribute($value='')
    {
    	$this->attributes['parqueadero'] = $this->checkbox($value);
    }
    
    public function checkbox($value='')
    {
    	if($value == 'on')
    		 return 1;
    	else
    		return 0;
    }

}
