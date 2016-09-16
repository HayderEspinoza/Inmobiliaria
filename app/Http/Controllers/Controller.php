<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
    public $exitoso = 'Proceso exitoso';
    public $eliminado = 'Eliminado Correctamente';

    public function mensaje($mensaje = '', $tipo = '1')
    {
    	$color = ['danger', 'success', 'warning'];
    	session()->flash('color-mensaje', $color[$tipo]);
    	session()->flash('mensaje',$mensaje);
    }
}
