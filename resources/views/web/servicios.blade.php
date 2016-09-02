@extends('layout.template')
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
		<img src="{{asset('img/servicios/01.png')}}" alt="" class="img-responsive">
	</div>
	<div class="container servicios">
        <h1 class="text-center">NUESTROS SERVICIOS</h1>
        <div class="col-lg-8 block-center">
        	<p class="text-center">
	        	Contamos con un amplio portafolio y equipo de profesionales altamente capacitados que lo podrán asesorar en la compra y venta de inmuebles.
	        </p>
        </div>
        <div class="col-lg-10 block-center">
            <!-- Nav tabs -->
            <ul class="nav nav-pills col-lg-12" role="tablist" style="background:red;">
                <li role="presentation" class="active text-center"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <ul>
                        <li>SERVICIOS AL PROPIETARIO</li>
                        <li>Gestión Comercial.</li>
                        <li>Garantía Inmobiliaria.</li>
                        <li>Cuidadosa seleccion de sus arrendatarios</li>
                        <li>Amplio inventarios de inmuebles de vivienda.</li>
                        <li>Promoción del inmueble en diverson medios publicitarios.</li>
                        <li>Idóneo servicio de mantenimiento a su inmueble.</li>
                    </ul>
                    <ul>
                        <li>SERVICIOS AL ARRENDADOR</li>
                        <li>Amplia oferta de inmuebles</li>
                        <li>Tenemos respuesta rápida a su estudio de arriendo.</li>
                        <li>Búsqueda ágil a través de nuestra pagina web.</li>
                        <li>Equipo altamente calificado en competencias inmobiliarias</li>
                        <li>Atención personalizada y asesoría en los inmuebles de acuerdo a las necesidades del cliente</li>
                    </ul>
                    <div class="col-lg-4">
                        <h4>DESCARGAR</h4>
                        <div class="btn">
                            DESCARGAR REQUISITOS
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h4>PARA EMPRESAS</h4>
                        <p>
                            Si estas interesado en arrendar, por favor desrgue la solicitud de arrinedo.
                        </p>
                        <div class="btn">
                            DESCARGAR FORMULARIO
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h4>PERSONAS NATURALES</h4>
                        <p>
                            Si está interesado en arrendar, por favor descargue la solicitud de arriendo.
                        </p>
                        <div class="btn">
                            DESCARGAR FORMULARIO
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    <ul>
                        <li>BENEFICIOS PARA QUIEN VENDE</li>
                        <li>Promoción de Inmueble en diferentes medios especializados</li>
                        <li>Publicación del inmueble en nuestra pagina web</li>
                        <li>Asesores de ventas con gran experiencia</li>
                        <li>Acompañamiento jurídico durante el proceso de la venta de su inmueble</li>
                        <li>Lo asesoramos en el precio de su inmueble que desea poner en venta</li>
                    </ul>
                    <ul>
                        <li>BENEFICIOS PARA QUIEN COMPRA</li>
                        <li>Amplio inventario de inmuebles</li>
                        <li>Búsqueda ágil a traves de nuestra pagina web</li>
                        <li>Cuidadoso estudio de los títulos de propiedad</li>
                        <li>Asesoría durante el proceso de venta y post-venta</li>
                        <li>Hacemos estudios juridicos del inmueble, para conocer si esta libre gravámenes y/o limitaciones</li>
                        <li>Ingreso constante de nuevos inmubeles y proyectos</li>
                    </ul>
                    <div class="col-lg-4">
                        <h4>DESCARGAR</h4>
                        <div class="btn">
                            DESCARGAR REQUISITOS
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h4>PARA EMPRESAS</h4>
                        <p>
                            Si estas interesado en arrendar, por favor desrgue la solicitud de arrinedo.
                        </p>
                        <div class="btn">
                            DESCARGAR FORMULARIO
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h4>PERSONAS NATURALES</h4>
                        <p>
                            Si está interesado en arrendar, por favor descargue la solicitud de arriendo.
                        </p>
                        <div class="btn">
                            DESCARGAR FORMULARIO
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="messages">
                    <ul>
                        <li>Podemos asesoralo en tipo de proyecto que puede hacer en determinada ubicación</li>
                        <li>Manejo, seguimiento y acompañamientoen la sala de ventas.</li>
                        <li>Elaboración y asesoria de planes de publicidad y comunicación.</li>
                        <li>Promoción permanente en nuestra base de datos</li>
                        <li>Acompañamiento a los compradores en los tramites y documentación ante la fiducia</li>
                        <li></li>
                    </ul>
                    <div class="col-lg-4">
                        <h4>PROYECTOS</h4>
                        <div class="btn">VER PROYECTOS</div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<!--Scroll Up-->
	@include('include.scrollUp', ['id' => 'top'])
	<!--Pie de pagina-->
	@include('include.footer')
@endsection