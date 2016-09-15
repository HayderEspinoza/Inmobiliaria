<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Negocio\Entities\Ciudad;
use App\Http\Requests;
use \Validator;
class CiudadController extends Controller
{
    public function index()
    {
        $ciudades = Ciudad::where('estado', '1');
        $ciudades = $ciudades->paginate();
    	return view('admin.ciudad.index', compact('ciudades'));
    }
    public function create()
    {
    	return view('admin.ciudad.create');
    }
    public function store(Request $request)
    {
    	$inputs  = $request->all();
    	$rules = [
    		'nombre' => 'required',
    		'descripcion' => 'required'
    	];
    	$validator = Validator::make($inputs, $rules);
    	if($validator->passes()){
    		$ciudad = new Ciudad();
    		$ciudad->fill($inputs);
    		$ciudad->save();
    		return redirect()->route('ciudad.index');
    	}
    	return redirect()->bacK()->withInput()->withErrors($validator);
    }
    public function edit($id)
    {
    	$ciudad = Ciudad::findOrFail($id);
    	return view('admin.ciudad.edit', compact('ciudad'));
    }
    public function update(Request $request, $id)
    {
    	$inputs = $request->all();
    	$rules = ['nombre' => 'required', 'descripcion' => 'required'];
    	$validator = Validator::make($inputs, $rules);
    	if($validator->passes()){
    		$ciudad = Ciudad::find($id);
    		$ciudad->fill($inputs);
    		$ciudad->save();
    		return redirect()->route('ciudad.index');
    	}
    	return redirect()->back()->withInput()->withErrors($validator);
    }
    public function destroy($id)
    {
    	$ciudad = Ciudad::find($id);
    	$ciudad->delete();
    	return redirect()->route('ciudad.index');
    }
}