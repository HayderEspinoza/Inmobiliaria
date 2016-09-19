<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Negocio\Entities\Tipo;
use Negocio\Entities\Oferta;
class HomeController extends Controller
{
    public function index()
    {
        return view('web.home');
    }
    public function apartamentos()
    {
        $tipos = Tipo::where('estado', '1')
                    ->lists('nombre', 'id');
        $ofertas = Oferta::where('estado', '1')
                    ->lists('nombre', 'id');
        return view('web.apartamentos', compact('tipos', 'ofertas'));
    }
    public function servicios()
    {
        return view('web.servicios');   
    }
    public function inmobiliaria()
    {
        return view('web.inmobiliaria');   
    }
    public function proyectos()
    {
        return view('web.proyectos');
    }
    public function contacto()
    {
        return view('web.contacto');
    }
}
