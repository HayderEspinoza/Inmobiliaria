@extends('layouts.template')
@section('estilos')
	<style>
		.contacto{
			padding-top: 0 !important;
		}
	</style>
@endsection
@section('contenido')
    @include('include.toggle')
	@include('include.menu')
	@include('include.contacto')
    <!--Pie de pagina-->
	@include('include.footer')
	<!--Scroll Up-->
	@include('include.scrollUp', ['id' => 'top'])
@endsection