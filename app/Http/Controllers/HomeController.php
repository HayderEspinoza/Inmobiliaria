<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Negocio\Entities\Tipo;
use Negocio\Entities\Oferta;
use Negocio\Entities\Barrio;
use Negocio\Entities\Ciudad;
use Negocio\Entities\Inmueble;
use Negocio\Entities\Imagen;
use Nette\Mail\Message;
use Nette\Mail\SendmailMailer;
use Mail;
class HomeController extends Controller
{
    public function index()
    {
        $tipos = ['']+Tipo::where('estado', '1')
                    ->lists('nombre', 'id')
                    ->toArray();
        $ofertas = [''] + Oferta::where('estado', '1')
                    ->lists('nombre', 'id')
                    ->toArray();

        $barrios = Barrio::where('estado', '1')
                ->orderBy('nombre')
                ->lists('nombre', 'id');

        $inmueble = (new Inmueble())->setTable('inmuebles as in');
        $inmuebles = $inmueble->select( \DB::raw('MAX(destacado)'), 'tp.nombre as tipo', 'in.precio', 'in.area', 'in.habitacion', 'in.banho', 'in.antiguedad', 'img.nombre as imagen', 'br.nombre as barrio', 'in.barrio_id')
                            ->leftJoin('tipos as tp', 'tp.id', '=', 'in.tipo_id')
                            ->leftJoin('ofertas as of', 'of.id', '=', 'in.oferta_id')
                            ->leftJoin('ciudades as ci', 'ci.id', '=', 'in.ciudad_id')
                            ->leftJoin('barrios as br', 'br.id', '=', 'in.barrio_id')
                            ->leftJoin('imagenes as img', function($q){
                                $q->on('img.inmueble_id', '=', 'in.id');
                                $q->where('img.perfil', '=', '1');
                            })
                            ->where('in.estado', '1')
                            ->groupBy('in.barrio_id');
        $inmuebles =   $inmuebles->get();
        debug($inmuebles);
        return view('web.home', compact('tipos', 'ofertas', 'inmuebles', 'barrios'));
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
        $ciudades = ['Ciudad']+Ciudad::where('estado', '1')
                                ->lists('nombre', 'id')
                                ->toArray();
        $barrios = Barrio::where('estado', '1')
                            ->orderBy('nombre')
                            ->lists('nombre', 'id');
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
            
            if(isset($inputs['tipo_id']) && $inputs['tipo_id']> 0)
                $inmuebles->where('in.tipo_id', $inputs['tipo_id']);
            if(isset($inputs['oferta_id']) && $inputs['oferta_id']> 0)
                $inmuebles->where('in.oferta_id', $inputs['oferta_id']);
            if(isset($inputs['ciudad_id']) && $inputs['ciudad_id'] > 0)
                $inmuebles->where('in.ciudad_id', $inputs['ciudad_id']);
            if(isset($inputs['barrio_id']) && $inputs['barrio_id'] > 0)
                $inmuebles->where('in.barrio_id', $inputs['barrio_id']);
            if(isset($inputs['precio_min']) != '' && $inputs['precio_max'] != ''){
                $inmuebles->where(function($q) use ($inputs){
                    $q->where('in.precio', '>=', str_replace(',', '', $inputs['precio_min']));
                    $q->where('in.precio', '<=', str_replace(',', '', $inputs['precio_max']));
                });
            }

            if(isset($inputs['habitacion']) && $inputs['habitacion'] != '')
                $inmuebles->where('habitacion', $inputs['habitacion']);
            if(isset($inputs['banho']) && $inputs['banho'] != '')
                $inmuebles->where('banho', $inputs['banho']);
            if(isset($inputs['area']) && $inputs['area'] != '')
                $inmuebles->where('area', $inputs['area']);
            if(isset($inputs['antiguedad']) && $inputs['antiguedad'] != '')
                $inmuebles->where('antiguedad', $inputs['antiguedad']);
            if(isset($inputs['piscina']) && $inputs['piscina'])
                $inmuebles->where('piscina', $inputs['piscina']);
            if(isset($inputs['parqueadero']) && $inputs['parqueadero'])
                $inmuebles->where('parqueadero', $inputs['parqueadero']);
            if(isset($inputs['cocina']) && $inputs['cocina'])
                $inmuebles->where('cocina', $inputs['cocina']);
            if(isset($inputs['zona_residencial']) && $inputs['zona_residencial'])
                $inmuebles->where('zona_residencial', $inputs['zona_residencial']);
            if(isset($inputs['conjunto_cerrado']) && $inputs['conjunto_cerrado'])
                $inmuebles->where('conjunto_cerrado', $inputs['conjunto_cerrado']);
            if(isset($inputs['porteria']) && $inputs['porteria'])
                $inmuebles->where('porteria', $inputs['porteria']);
            if(isset($inputs['patio']) && $inputs['patio'])
                $inmuebles->where('patio', $inputs['patio']);
            if(isset($inputs['direccion']) && $inputs['direccion'])
                $inmuebles->where('direccion', 'like', '%'.$inputs['direccion'].'%');

            if(isset($inputs['salon']) && $inputs['salon'])
                $inmuebles->where('salon', $inputs['salon']);
            if(isset($inputs['cocineta']) && $inputs['cocineta'])
                $inmuebles->where('cocineta', $inputs['cocineta']);
            if(isset($inputs['mezanine']) && $inputs['mezanine'])
                $inmuebles->where('mezanine', $inputs['mezanine']);
            if(isset($inputs['cuarto_servicio']) && $inputs['cuarto_servicio'])
                $inmuebles->where('cuarto_servicio', $inputs['cuarto_servicio']);
            if(isset($inputs['banho_servicio']) && $inputs['banho_servicio'])
                $inmuebles->where('banho_servicio', $inputs['banho_servicio']);
            if(isset($inputs['locker']) && $inputs['locker'])
                $inmuebles->where('locker', $inputs['locker']);
        }
        
        $inmuebles = $inmuebles->paginate();

        return view('web.inmuebles', compact('tipos', 'ofertas', 'ciudades', 'inmuebles', 'inputs', 'barrios'));
    }
    public function inmueble($id)
    {
        $inmueble = (new Inmueble())->setTable('inmuebles as in');
        $inmueble = $inmueble->leftJoin('tipos as tp', 'tp.id', '=', 'in.tipo_id')
                            ->leftJoin('ofertas as of', 'of.id', '=', 'in.oferta_id')
                            ->where('in.id', $id)
                            ->select('in.id', 'tp.nombre as tipo', 'of.nombre as oferta', 'in.direccion', 'in.precio', 'in.descripcion', 'in.area', 'in.habitacion', 'in.banho', 'in.direccion', 'in.piscina', 'in.parqueadero', 'in.cocina', 'in.zona_residencial', 'in.conjunto_cerrado', 'in.porteria', 'in.patio', 'in.destacado', 'in.salon', 'in.cocineta', 'in.mezanine', 'in.cuarto_servicio', 'in.banho_servicio', 'in.locker')
                            ->first();

        $tmp = (new Inmueble())->setTable('inmuebles as in');
        $query = $tmp->select('in.id', 'of.nombre as oferta', 'in.descripcion','tp.nombre as tipo', 'in.precio', 'in.area', 'in.habitacion', 'in.banho', 'in.antiguedad', 'img.nombre as imagen')
                            ->leftJoin('tipos as tp', 'tp.id', '=', 'in.tipo_id')
                            ->leftJoin('ofertas as of', 'of.id', '=', 'in.oferta_id')
                            ->leftJoin('ciudades as ci', 'ci.id', '=', 'in.ciudad_id')
                            ->leftJoin('imagenes as img', function($q){
                                $q->on('img.inmueble_id', '=', 'in.id');
                                $q->where('img.perfil', '=', '1');
                            })
                            ->where('in.estado', '1');
        
        $destacados =   $query->orderBy('in.destacado', 'desc')
                            ->take(3)
                            ->get();
        $inmueble->destacado += 1;
        $inmueble->save();
        $imagenes = Imagen::where('inmueble_id', $id)
                            ->orderBy('perfil', 'desc')
                            ->get();
        $portada = Imagen::where('inmueble_id', $id)
                            ->orderBy('perfil', 'desc')
                            ->first();
        return view('web.detalle', compact('inmueble', 'imagenes', 'portada', 'destacados'));
    }
    public function interesaInmueble(Request $data, $id)
    {
        $datos = $data->all();
        $vista = view('email.inmueble', compact('datos'))->render();
        $mail = new Message;
        $mail->setFrom('Pagina Web <contacto@inmobiliariasantodomingocartagena.com>')
            ->addTo('informacion@inmobiliariasantodomingocartagena.com')
            ->setSubject('Me interesa este Inmueble')
            ->setHtmlBody($vista);

        $mailer = new SendmailMailer();
        $mailer->send($mail);

        $this->mensaje($this->exitoso);
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
        $vista = view('email.contacto', compact('datos'));
        $mail = new Message;
        $mail->setFrom('Pagina Web <contacto@inmobiliariasantodomingocartagena.com>')
            ->addTo('informacion@inmobiliariasantodomingocartagena.com')
            ->setSubject('Contacto Pagina Web')
            ->setHtmlBody($vista);

        $mailer = new SendmailMailer();
        $mailer->send($mail);

        $this->mensaje($this->exitoso);
        return redirect()->back();
    }
}
