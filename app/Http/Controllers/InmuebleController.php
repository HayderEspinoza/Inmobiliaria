<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Negocio\Entities\Tipo;
use Negocio\Entities\Ciudad;
use App\Http\Requests;

class InmuebleController extends Controller
{
    public function index()
    {
    	return view('admin.inmueble.index');
    }
    public function create()
    {
    	$tipos = Tipo::where('estado', '1')
    				->lists('nombre', 'id');
    	$ciudades = Ciudad::where('estado', '1')
    						->lists('nombre', 'id');
    	return view('admin.inmueble.create', compact('tipos', 'ciudades'));
    }
    public function store(Request $request)
    {
        $inputs = $request->all();
        dd($inputs);
    }
}
