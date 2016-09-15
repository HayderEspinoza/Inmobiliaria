<?php

namespace Negocio\Entities;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Intermediate
{
    protected $table = 'tipos';
    protected $fillable = ['nombre', 'descripcion'];
}
