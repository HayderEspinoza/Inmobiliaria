<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Negocio\Entities\Ciudad;
use Negocio\Entities\Inmueble;
use Negocio\Entities\Imagen;
use App\Http\Requests;
use \Validator;
use \DB;
class ImagenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($inmueble)
    {
        $inmueble = Inmueble::find($inmueble);
        $imagenes = Imagen::select('id', 'nombre', 'inmueble_id', DB::raw("CASE perfil WHEN 0 THEN 'default' WHEN 1 THEN 'success' END AS class"))
                        ->where('inmueble_id', $inmueble->id)
                        ->where('estado', '1')
                        ->get();
        return view('admin.imagen.index', compact('inmueble', 'imagenes'));
    }
    public function create($inmueble)
    {
        $inmueble = Inmueble::find($inmueble);
        return view('admin.imagen.create', compact('inmueble'));
    }
    public function store(Request $request, $inmueble)
    {
        $inputs = $request->all();
        $rules = [
            'nombre' => 'required|mimes:jpeg,jpg,png'
        ];
        $validator = \Validator::make($inputs, $rules);
        if($validator->passes()){
            $imagen = new Imagen();
            $imagen->inmueble_id = $inmueble;
            $imagen->fill($inputs);
            $imagen->save();
            $this->mensaje($this->exitoso);
            return redirect()->route('inmueble.imagen.index', [$inmueble]);
        }
        $this->mensaje('Alguno de los campos no esta listo', '2');
        return redirect()->back()->withInput()->withErrors($validator);
    }
    public function edit($inmueble, $imagen)
    {
        $imagen = Imagen::find($imagen);
        return view('admin.imagen.edit', compact($imagen));
    }
    public function destroy($inmueble, $imagen)
    {
        $imagen = Imagen::find($imagen);
        \Storage::delete($imagen->nombre);
        $imagen->delete();
        $this->mensaje($this->eliminado);
        return redirect()->back();
    }
    public function perfil($id='')
    {
            $imagen = Imagen::find($id);
            $imagenes = Imagen::where('inmueble_id', $imagen->inmueble_id)
                                ->get();
            foreach ($imagenes as $key => $img) {
                $img->perfil = 0;
                $img->save();
            }
            $imagen->perfil = 1;
            $imagen->save();
            return redirect()->back();
    }
}