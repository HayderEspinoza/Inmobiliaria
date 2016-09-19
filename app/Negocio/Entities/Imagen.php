<?php

namespace Negocio\Entities;

use Illuminate\Database\Eloquent\Model;
use \File;
use \Storage;
use Carbon\Carbon;
class Imagen extends Intermediate
{
    protected $table = 'imagenes';
    protected $fillable = ['inmueble_id', 'nombre', 'estado'];

    public function setNombreAttribute($img = '')
    {
    	$fecha = Carbon::now()->format('dmY');
    	$nombre = $img->getClientOriginalName();
    	$this->attributes['nombre'] = $fecha.$nombre;
    	Storage::disk('public')->put($fecha.$nombre, File::get($img));
    }
}
