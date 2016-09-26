<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Negocio\Entities\Tipo;
use Negocio\Entities\Oferta;
use Negocio\Entities\Ciudad;
use Negocio\Entities\Inmueble;
use Mail;
class HomeController extends Controller
{
    public function index()
    {
        $tipos = ['TIPO DE INMUEBLE']+Tipo::where('estado', '1')
                    ->lists('nombre', 'id')
                    ->toArray();
        $ofertas = Oferta::where('estado', '1')->get();
        return view('web.home', compact('tipos', 'ofertas'));
    }
    public function inmuebles(Request $data)
    {
        $inputs = $data->all();
        $tipos  =   ['']+Tipo::where('estado', '1')
                            ->lists('nombre', 'id')
                            ->toArray();
        $ofertas =  ['']+Oferta::where('estado', '1')
                                ->lists('nombre', 'id')
                                ->toArray();
        $ciudades = ['']+Ciudad::where('estado', '1')
                                ->lists('nombre', 'id')
                                ->toArray();
        $inmueble = (new Inmueble())->setTable('inmuebles as in');
        $inmuebles = $inmueble->select('in.id', 'of.nombre as oferta', 'tp.nombre as tipo', 'in.precio', 'in.area', 'in.habitacion', 'in.banho', 'in.antiguedad', 'img.nombre as imagen')
                            ->leftJoin('tipos as tp', 'tp.id', '=', 'in.tipo_id')
                            ->leftJoin('ofertas as of', 'of.id', '=', 'in.oferta_id')
                            ->leftJoin('ciudades as ci', 'ci.id', '=', 'in.ciudad_id')
                            ->leftJoin('imagenes as img', function($q){
                                $q->on('img.inmueble_id', '=', 'in.id');
                                $q->where('img.perfil', '=', '1');
                            })
                            ->where('in.estado', '1');

        if(isset($inputs['buscar'])){
            // dd($inputs);
            if(isset($inputs['tipo_id']) > 0)
                $inmuebles->where('in.tipo_id', $inputs['tipo_id']);
            if(isset($inputs['oferta_id']) > 0)
                $inmuebles->where('in.oferta_id', $inputs['oferta_id']);
            if(isset($inputs['ciudad_id']) > 0)
                $inmuebles->where('in.ciudad_id', $inputs['ciudad_id']);
            if(isset($inputs['precio_min']) != '' && $inputs['precio_max'] != ''){
                $inmuebles->where(function($q) use ($inputs){
                    $q->where('in.precio', '>=', str_replace(',', '', $inputs['precio_min']));
                    $q->where('in.precio', '<=', str_replace(',', '', $inputs['precio_max']));
                });
            }
            if(isset($inputs['habitacion']) != '')
                $inmuebles->where('habitacion', $inputs['habitacion']);
            if(isset($inputs['banho']) != '')
                $inmuebles->where('banho', $inputs['banho']);
            if(isset($inputs['area']) != '')
                $inmuebles->where('area', $inputs['area']);
            if(isset($inputs['antiguedad']) != '')
                $inmuebles->where('antiguedad', $inputs['antiguedad']);
            if(isset($inputs['antiguedad']) != '')
                $inmuebles->where('banho', $inputs['banho']);
            if(isset($inputs['piscina']))
                $inmuebles->where('piscina', $inputs['piscina']);
            if(isset($inputs['parqueadero']))
                $inmuebles->where('parqueadero', $inputs['parqueadero']);
            if(isset($inputs['cocina']))
                $inmuebles->where('cocina', $inputs['cocina']);
            if(isset($inputs['zona_residencial']))
                $inmuebles->where('zona_residencial', $inputs['zona_residencial']);
            if(isset($inputs['conjunto_cerrado']))
                $inmuebles->where('conjunto_cerrado', $inputs['conjunto_cerrado']);
            if(isset($inputs['porteria']))
                $inmuebles->where('porteria', $inputs['porteria']);
            if(isset($inputs['patio']))
                $inmuebles->where('patio', $inputs['patio']);
            if(isset($inputs['direccion']))
                $inmuebles->where('direccion', 'like', '%'.$inputs['direccion'].'%');
        }
        $inmuebles = $inmuebles->paginate();
        return view('web.inmuebles', compact('tipos', 'ofertas', 'ciudades', 'inmuebles', 'inputs'))->withInput($inputs);
    }
    public function inmueble($id)
    {
        $inmueble = Inmueble::find($id);
        $inmueble->destacado+=1;
        $inmueble->save();
        return redirect()->back();
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
    public function enviar(Request $data)
    {
        $datos = $data->all();
        /*Mail::send('email.contacto', compact('datos'), function($msj){
            $msj->subject('Correo de Contacto');
            $msj->to('contacto@inmobiliariasantodomingocartagena.com');
        });*/
        return view('email.contacto', compact('datos'));
    }
}
