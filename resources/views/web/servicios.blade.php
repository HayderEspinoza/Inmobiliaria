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
	<div class="container servicios" id="top">
        <h1 class="text-center">NUESTROS SERVICIOS</h1>
        <div class="col-lg-8 block-center">
        	<p class="text-center">
	        	Contamos con un amplio portafolio y equipo de profesionales altamente capacitados que lo podrán asesorar en la compra y venta de inmuebles.
	        </p>
        </div>
        <div class="col-lg-12">
        	<a href="#" class="btn">
        		ARRIENDOS
        	</a>
        	<a href="#" class="btn">
        		VENTAS
        	</a>
        	<a href="#" class="btn">
        		PROYECTOS
        	</a>
        </div>
	</div>
	<!--Scroll Up-->
	@include('include.scrollUp', ['id' => 'top'])
	<!--Pie de pagina-->
	@include('include.footer')
@endsection