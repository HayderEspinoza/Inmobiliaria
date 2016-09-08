<?php

namespace Negocio\Entities;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Intermediate
{
    protected $table = 'ciudades';
    protected $fillable = ['nombre', 'codigo', 'descripcion', 'estado'];
}
