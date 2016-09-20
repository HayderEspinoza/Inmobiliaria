<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Negocio\Entities\Tipo;
use Negocio\Entities\Oferta;
use Negocio\Entities\Ciudad;
use Negocio\Entities\Inmueble;
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
        $ciudades = Ciudad::where('estado', '1')
                    ->lists('nombre', 'id');
        $inmueble = (new Inmueble())->setTable('inmuebles as in');
        $inmuebles = $inmueble->select('of.nombre as oferta', 'tp.nombre as tipo', 'in.precio', 'in.area', 'in.habitacion', 'in.banho', 'in.antiguedad')
                            ->leftJoin('tipos as tp', 'tp.id', '=', 'in.tipo_id')
                            ->leftJoin('ofertas as of', 'of.id', '=', 'in.oferta_id')
                            ->leftJoin('ciudades as ci', 'ci.id', '=', 'in.ciudad_id')
                            ->where('in.estado', '1');
        $inmuebles = $inmuebles->paginate();
        return view('web.apartamentos', compact('tipos', 'ofertas', 'ciudades', 'inmuebles'));
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
