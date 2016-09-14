<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Negocio\Entities\Tipo;
use Negocio\Entities\Ciudad;
use Negocio\Entities\Inmueble;
use App\Http\Requests;

class InmuebleController extends Controller
{
    public function index()
    {
        $inmuebles = Inmueble::select('in.id', 'in.descripcion', 'tp.nombre')
                            ->join('tipos as tp', 'tp.id', '=', 'in.tipo_id')
                            ->where('in.estado', '1');
        $inmuebles = $inmuebles->paginate();
    	return view('admin.inmueble.index', compact('inmuebles'));
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
        $rules = [
            'tipo_id'       => 'required|numeric',
            'ciudad_id'     => 'required|numeric',
            'direccion'     => 'required',
            'habitacion'    => 'required|numeric',
            'banho'         => 'required|numeric',
            'area'          => 'required',
            'antiguedad'    => 'required',
            'precio'        => 'required',
        ];
        $validator = \Validator::make($inputs, $rules);
        if($validator->passes()){
            $inmueble = new Inmueble();
            $inmueble->fill($inputs);
            $inmueble->save();  
            return redirect()->route('inmueble.index');
        }
        return redirect()->back()->withInput()->withErrors($validator);

    }
}
