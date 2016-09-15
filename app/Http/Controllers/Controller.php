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

    public function mensaje($mensaje = '', $tipo = '1')
    {
    	$color = ['danger', 'success', 'warning'];
    	\Session::put('mensaje', $mensaje);
    	\Session::put('color-mensaje', $color[$tipo]);
    }
}
