<?php

namespace Negocio\Entities;

use Illuminate\Database\Eloquent\Model;
use \File;
use \Storage;
use Carbon\Carbon;
use Intervention\Image\ImageManager as Image;
class Imagen extends Intermediate
{
    protected $table = 'imagenes';
    protected $fillable = ['inmueble_id', 'nombre', 'estado'];

    public function setNombreAttribute($img = '')
    {
        try {
        	$fecha = Carbon::now()->format('dmYhis');
        	$nombre = $img->getClientOriginalName();
        	$this->attributes['nombre'] = $fecha.$nombre;
        	Storage::disk('public')->put($fecha.$nombre, File::get($img));
            $manager = new Image();
            $img = $manager->make('img/inmuebles/'.$fecha.$nombre);
            $img->resize(600, 600, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->resizeCanvas(600, 600, 'center', false, 'ffffff');    	
            $img->save('img/inmuebles/'.$fecha.$nombre);
            
        } catch (\Exception $e) {
            dd('La imagen que intenta ingregar es demasiado grande, por favor comuniquese con el administrador');
        }
    }
}
