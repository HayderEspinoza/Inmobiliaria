@extends('layouts.template')
@section('estilos')
	<style>
		body{
			background: #191a1c;
		}
        .logo-apartamentos{
            padding: 50px 0 100px 0;
        }
	</style>
@endsection
@section('contenido')
    @include('include.menu')
    @include('include.toggle')
	<div class="img-inmobiliaria" id="top">
		<img src="{{asset('img/servicios/01.jpg')}}" alt="" class="img-responsive">
	</div>
	<div class="container servicios">
        <h1 class="text-center">NUESTROS SERVICIOS</h1>
        <div class="col-lg-8 block-center">
        	<p class="text-center info">
	        	Contamos con un amplio portafolio y equipo de profesionales altamente capacitados que lo podrán asesorar en la compra y venta de inmuebles.
	        </p>
        </div>
        <div class="col-lg-12 block-center">
            <!-- Nav tabs -->
            <div class="row lista-servicios">
                <div class="col-sm-12 block-center">
                    <div class="col-sm-3 wrap-servicio">
                        <a href="#arriendos" class="btn active btn-block" aria-controls="arriendos" role="tab" data-toggle="tab">ARRIENDOS</a>
                    </div>
                    <div class="col-sm-3 wrap-servicio">
                        <a href="#ventas" class="btn btn-block" aria-controls="ventas" role="tab" data-toggle="tab">VENTAS</a>
                    </div>
                    <div class="col-sm-3 wrap-servicio">
                        <a href="#proyectos" class="btn btn-block" aria-controls="proyectos" role="tab" data-toggle="tab">PROYECTOS</a>
                    </div>
                    <div class="col-sm-3 wrap-servicio">
                        <a href="#evaluos" class="btn btn-block" aria-controls="evaluos" role="tab" data-toggle="tab">EVALÚOS</a>
                    </div>
                </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="arriendos">
                    <ul class="items-servicios">
                        <li>SERVICIOS AL PROPIETARIO</li>
                        <li>Gestión Comercial.</li>
                        <li>Garantía Inmobiliaria.</li>
                        <li>Cuidadosa seleccion de sus arrendatarios</li>
                        <li>Amplio inventarios de inmuebles de vivienda.</li>
                        <li>Promoción del inmueble en diverson medios publicitarios.</li>
                        <li>Idóneo servicio de mantenimiento a su inmueble.</li>
                    </ul>
                    <ul class="items-servicios">
                        <li>SERVICIOS AL ARRENDADOR</li>
                        <li>Amplia oferta de inmuebles</li>
                        <li>Tenemos respuesta rápida a su estudio de arriendo.</li>
                        <li>Búsqueda ágil a través de nuestra pagina web.</li>
                        <li>Equipo altamente calificado en competencias inmobiliarias</li>
                        <li>Atención personalizada y asesoría en los inmuebles de acuerdo a las necesidades del cliente</li>
                    </ul>
                    <div class="col-lg-12 documentos no-margen">
                        <h4>DESCARGAR</h4>
                        <div class="btn">
                            DESCARGAR REQUISITOS
                        </div>
                    </div>
                    <div class="col-lg-4 documentos">
                        <h4>PARA EMPRESAS</h4>
                        <p>
                            Si está interesado en arrendar, por favor descargue la solicitud de arriendo.
                        </p>
                        <div class="btn">
                            DESCARGAR FORMULARIO
                        </div>
                    </div>
                    <div class="col-lg-4 documentos">
                        <h4>PERSONAS NATURALES</h4>
                        <p>
                            Si está interesado en arrendar, por favor descargue la solicitud de arriendo.
                        </p>
                        <div class="btn">
                            DESCARGAR FORMULARIO
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="ventas">
                    <ul class="items-servicios">
                        <li>BENEFICIOS PARA QUIEN VENDE</li>
                        <li>Promoción de Inmueble en diferentes medios especializados</li>
                        <li>Publicación del inmueble en nuestra pagina web</li>
                        <li>Asesores de ventas con gran experiencia</li>
                        <li>Acompañamiento jurídico durante el proceso de la venta de su inmueble</li>
                        <li>Lo asesoramos en el precio de su inmueble que desea poner en venta</li>
                    </ul>
                    <ul class="items-servicios">
                        <li>BENEFICIOS PARA QUIEN COMPRA</li>
                        <li>Amplio inventario de inmuebles</li>
                        <li>Búsqueda ágil a traves de nuestra pagina web</li>
                        <li>Cuidadoso estudio de los títulos de propiedad</li>
                        <li>Asesoría durante el proceso de venta y post-venta</li>
                        <li>Hacemos estudios juridicos del inmueble, para conocer si esta libre gravámenes y/o limitaciones</li>
                        <li>Ingreso constante de nuevos inmubeles y proyectos</li>
                    </ul>
                    <div class="col-lg-12 documentos no-margen">
                        <h4>DESCARGAR</h4>
                        <div class="btn">
                            DESCARGAR REQUISITOS
                        </div>
                    </div>
                    <div class="col-lg-4 documentos">
                        <h4>PARA EMPRESAS</h4>
                        <p>
                            Si estas interesado en arrendar, por favor desrgue la solicitud de arriendo.
                        </p>
                        <div class="btn">
                            DESCARGAR FORMULARIO
                        </div>
                    </div>
                    <div class="col-lg-4 documentos">
                        <h4>PERSONAS NATURALES</h4>
                        <p>
                            Si está interesado en arrendar, por favor descargue la solicitud de arriendo.
                        </p>
                        <div class="btn">
                            DESCARGAR FORMULARIO
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="proyectos">
                    <ul class="items-servicios">
                        <li>BENEFICIOS</li>
                        <li>Podemos asesoralo en tipo de proyecto que puede hacer en determinada ubicación</li>
                        <li>Manejo, seguimiento y acompañamientoen la sala de ventas.</li>
                        <li>Elaboración y asesoria de planes de publicidad y comunicación.</li>
                        <li>Promoción permanente en nuestra base de datos</li>
                        <li>Acompañamiento a los compradores en los tramites y documentación ante la fiducia</li>
                    </ul>
                    <div class="col-lg-4 documentos no-margen">
                        <h4>PROYECTOS</h4>
                        <a href="{{ route('web.proyectos') }}" class="btn">VER PROYECTOS</a>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="evaluos">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="items-servicios">
                                <li>PARA QUE SIRVE UN EVALUO</li>
                                <li>Realizar un crédito hipotecario</li>
                                <li>Garantías hipotecarias</li>
                                <li>Adquirir un seguro</li>
                                <li>Procesos judiciales</li>
                                <li>Fusionar empresas</li>
                                <li>Procesos de separación de bienes</li>
                                <li>Procesos de sucesión</li>
                                <li>Liquidaciones de empresas</li>
                                <li>Negociacion de leasing</li>
                                <li>Negocios en marcha</li>
                                <li>Balaces contables</li>
                                <li>y otros</li>
                            </ul>
                        </div>
                        <div class="col-lg-5">
                            <ul class="requisitos">
                                <li>REQUISITOS</li>
                                <li>Copia de la escritura de compa venta</li>
                                <li>Copia de certificado de tradición y libertad</li>
                                <li>Copia de planos ( si los tiene )</li>
                                <li>Abono de $ </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <div class="col-lg 12 text-center link-avaluos">
        <span>
            SI ESTÁ INTESADO EN NUESTRO SERVICIO DE AVALÚO HACER CLICK AQUI
        </span>
        <a href="#" class="btn btn-default">
            AVALÚOS
        </a>
    </div>
	<!--Scroll Up-->
	@include('include.scrollUp', ['id' => 'top'])
	<!--Pie de pagina-->
	@include('include.footer')
@endsection