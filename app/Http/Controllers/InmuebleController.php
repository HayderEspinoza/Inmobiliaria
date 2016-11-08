<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Negocio\Entities\Tipo;
use Negocio\Entities\Oferta;
use Negocio\Entities\Ciudad;
use Negocio\Entities\Inmueble;
use App\Http\Requests;

class InmuebleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $data)
    {
        $inputs = $data->all();
        $inmueble = (new Inmueble())->setTable('inmuebles as in');
        $inmuebles = $inmueble->select('in.id', 'in.descripcion', 'tp.nombre', 'in.precio', 'ci.nombre as ciudad', 'of.nombre as oferta')
                            ->leftJoin('tipos as tp', 'tp.id', '=', 'in.tipo_id')
                            ->leftJoin('ciudades as ci', 'ci.id', '=', 'in.ciudad_id')
                            ->leftJoin('ofertas as of', 'of.id', '=', 'in.oferta_id' )
                            ->where('in.estado', '1');
        if(isset($inputs['buscar'])){
            $inmuebles->where('in.descripcion', 'like', '%'.$inputs['descripcion'].'%');
        }
        $inmuebles = $inmuebles->paginate();
    	return view('admin.inmueble.index', compact('inmuebles', 'inputs'));
    }
    public function create()
    {
    	$tipos = Tipo::where('estado', '1')
    				->lists('nombre', 'id');
    	$ciudades = Ciudad::where('estado', '1')
    						->lists('nombre', 'id');
        $ofertas = Oferta::where('estado', '1')
                            ->lists('nombre', 'id');
    	return view('admin.inmueble.create', compact('tipos', 'ciudades', 'ofertas'));
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
            'oferta_id'     => 'required|numeric'
        ];
        $validator = \Validator::make($inputs, $rules);
        if($validator->passes()){
            $inmueble = new Inmueble();
            $inmueble->fill($inputs);
            $inmueble->save();
            $this->mensaje($this->exitoso);
            return redirect()->route('inmueble.index');
        }
        return redirect()->back()->withInput()->withErrors($validator);

    }
    public function show($id)
    {
        $inmueble = Inmueble::find($id);
        $tipos = Tipo::where('estado', '1')
                    ->lists('nombre', 'id');
        $ciudades = Ciudad::where('estado', '1')
                            ->lists('nombre', 'id');
        $ofertas = Oferta::where('estado', '1')
                            ->lists('nombre', 'id');
        return view('admin.inmueble.show', compact('inmueble', 'tipos', 'ciudades', 'ofertas'));
    }
    public function edit($id)
    {
        $inmueble = Inmueble::find($id);
        $tipos = Tipo::where('estado', '1')
                    ->lists('nombre', 'id');
        $ciudades = Ciudad::where('estado', '1')
                            ->lists('nombre', 'id');
        $ofertas = Oferta::where('estado', '1')
                            ->lists('nombre', 'id');                            
        return view('admin.inmueble.edit', compact('inmueble', 'tipos', 'ciudades', 'ofertas'));   
    }
    public function update(Request $request, $id)
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
            'oferta_id'     => 'required|numeric'
        ];
        $validator = \Validator::make($inputs, $rules);
        if($validator->passes()){
            $inmueble = Inmueble::find($id);
            $inmueble->fill($inputs);
            $inmueble->save(); 
            $this->mensaje($this->exitoso);
            return redirect()->route('inmueble.index');
        }
        return redirect()->back()->withInput()->withErrors($validator);
    }
    public function destroy($id)
    {
        $inmueble = Inmueble::find($id);
        $inmueble->delete();
        $this->mensaje($this->eliminado);
        return redirect()->route('inmueble.index');
    }
}
