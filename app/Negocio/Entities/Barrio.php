<?php

namespace Negocio\Entities;

use Illuminate\Database\Eloquent\Model;

class Barrio extends Intermediate
{
    protected $table = "barrios";
    protected $fillable = ['nombre', 'descripcion', 'estado'];
}
