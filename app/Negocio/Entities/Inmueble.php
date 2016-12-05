<?php

namespace Negocio\Entities;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Intermediate
{
    protected $table = 'inmuebles';
    protected $fillable = ['tipo_id', 'ciudad_id', 'barrio_id', 'oferta_id', 'direccion', 'habitacion', 'banho', 'area', 'parqueadero', 'piscina', 'cocina', 'zona_residencial', 'conjunto_cerrado', 'porteria', 'patio', 'antiguedad', 'salon', 'cocineta', 'mezanine', 'cuarto_servicio', 'banho_servicio', 'locker','precio', 'descripcion', 'estado', 'terraza', 'balcon'];

    public function setParqueaderoAttribute($value='')
    {
    	$this->attributes['parqueadero'] = $this->checkbox($value);
    }
    public function setPiscinaAttribute($value='')
    {
        $this->attributes['piscina'] = $this->checkbox($value);
    }
    public function setCocinaAttribute($value='')
    {
        $this->attributes['cocina'] = $this->checkbox($value);
    }
    public function setZonaResidencialAttribute($value='')
    {
        $this->attributes['zona_residencial'] = $this->checkbox($value);
    }
    public function setConjuntoCerradoAttribute($value='')
    {
        $this->attributes['conjunto_cerrado'] = $this->checkbox($value);
    }
    public function setPorteriaAttribute($value='')
    {
        $this->attributes['porteria'] = $this->checkbox($value);
    }
    public function setPatioAttribute($value='')
    {
        $this->attributes['patio'] = $this->checkbox($value);
    }
    public function setPrecioAttribute($value='')
    {
        $sinComa = str_replace(',', '', $value);
        $this->attributes['precio'] = $sinComa;
    }

    public function setSalonAttribute($value='')
    {
        $this->attributes['salon'] = $this->checkbox($value);
    }
    public function setCocinetaAttribute($value='')
    {
        $this->attributes['cocineta'] = $this->checkbox($value);
    }
    public function setMezanineAttribute($value='')
    {
        $this->attributes['mezanine'] = $this->checkbox($value);
    }
    public function setCuartoServicioAttribute($value='')
    {
        $this->attributes['cuarto_servicio'] = $this->checkbox($value);
    }
    public function setbanhoServicioAttribute($value='')
    {
        $this->attributes['banho_servicio'] = $this->checkbox($value);
    }
    public function setLockerAttribute($value='')
    {
        $this->attributes['locker'] = $this->checkbox($value);
    }
    public function setBalconAttribute($value='')
    {
        $this->attributes['balcon'] = $this->checkbox($value);
    }
    public function setTerrazaAttribute($value='')
    {
        $this->attributes['terraza'] = $this->checkbox($value);
    }

    public function checkbox($value='')
    {
    	if($value == 'on')
    		 return 1;
    	else
    		return 0;
    }

}
