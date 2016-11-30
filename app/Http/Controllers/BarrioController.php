<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Negocio\Entities\Barrio;
use App\Http\Requests;
use \Validator;
class BarrioController extends Controller
{
    protected $barrio;
    public function __construct(Barrio $barrio)
    {
        $this->middleware('auth');
        $this->barrio = $barrio;
    }
    public function index()
    {
        $barrios = $this->barrio->where('estado', '1');
        $barrios = $barrios->paginate();
        return view('admin.barrio.index', compact('barrios'));
    }
    public function create()
    {
        return view('admin.barrio.create');
    }
    public function store(Request $request)
    {
        $inputs  = $request->all();
        $rules = [
            'nombre' => 'required',
        ];
        $validator = Validator::make($inputs, $rules);
        if($validator->passes()){
            $barrio = new Barrio();
            $barrio->fill($inputs);
            $barrio->save();
            $this->mensaje($this->exitoso);
            return redirect()->route('barrio.index');
        }
        return redirect()->bacK()->withInput()->withErrors($validator);
    }
    public function edit($id)
    {
        $barrio = $this->barrio->findOrFail($id);
        return view('admin.barrio.edit', compact('barrio'));
    }
    public function update(Request $request, $id)
    {
        $inputs = $request->all();
        $rules = ['nombre' => 'required'];
        $validator = Validator::make($inputs, $rules);
        if($validator->passes()){
            $ciudad = $this->barrio->find($id);
            $ciudad->fill($inputs);
            $ciudad->save();
            $this->mensaje($this->exitoso);
            return redirect()->route('barrio.index');
        }
        return redirect()->back()->withInput()->withErrors($validator);
    }
    public function destroy($id)
    {
        $barrio = $this->barrio->find($id);
        $barrio->delete();
        $this->mensaje($this->eliminado);
        return redirect()->route('barrio.index');
    }
}
