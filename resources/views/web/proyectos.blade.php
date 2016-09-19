@extends('layouts.template')
@section('estilos')
	<style>
	
	</style>
@endsection
@section('contenido')
    @include('include.menu')
    @include('include.toggle')
	<div class="container" id="top">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati reiciendis consequuntur corporis possimus voluptatum illum nam quidem adipisci, architecto, fugiat accusamus numquam sunt perspiciatis, quas in ducimus molestiae magnam quaerat!
	</div>
    <!-- Contacto -->
    @include('include.contacto')
	<!--Pie de pagina-->
	@include('include.footer')
	<!--Scroll Up-->
	@include('include.scrollUp', ['id' => 'top'])
@endsection