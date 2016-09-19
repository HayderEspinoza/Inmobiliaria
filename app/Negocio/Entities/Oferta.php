<?php

namespace Negocio\Entities;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Intermediate
{
    protected $table = 'ofertas';
    protected $fillable = ['nombre', 'descripcion', 'estado'];
}
