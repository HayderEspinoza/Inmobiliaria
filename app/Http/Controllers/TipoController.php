<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Negocio\Entities\Tipo;
use App\Http\Requests;
use \Validator;
class TipoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $tipos = Tipo::where('estado', '1');
        $tipos = $tipos->paginate();
    	return view('admin.tipo.index', compact('tipos'));
    }
    public function create()
    {
    	return view('admin.tipo.create');
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
    		$tipo = new Tipo();
    		$tipo->fill($inputs);
    		$tipo->save();
            $this->mensaje($this->exitoso);
    		return redirect()->route('tipo.index');
    	}
    	return redirect()->bacK()->withInput()->withErrors($validator);
    }
    public function edit($id)
    {
    	$tipo = Tipo::findOrFail($id);
    	return view('admin.tipo.edit', compact('tipo'));
    }
    public function update(Request $request, $id)
    {
    	$inputs = $request->all();
    	$rules = ['nombre' => 'required', 'descripcion' => 'required'];
    	$validator = Validator::make($inputs, $rules);
    	if($validator->passes()){
    		$tipo = Tipo::find($id);
    		$tipo->fill($inputs);
    		$tipo->save();
            $this->mensaje($this->exitoso);
    		return redirect()->route('tipo.index');
    	}
    	return redirect()->back()->withInput()->withErrors($validator);
    }
    public function destroy($id)
    {
    	$tipo = Tipo::find($id);
    	$tipo->delete();
        $this->mensaje($this->eliminado);
    	return redirect()->route('tipo.index');
    }
}
