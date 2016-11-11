@extends('layouts.template')
@section('estilos')
	<style>
		.contacto{
			padding-top: 0 !important;
		}
		.contacto{
			background: #f7f7f7;
		}
		input.form-control, textarea{
			background: #f7f7f7 !important;
		}
	</style>
@endsection
@section('contenido')
	@include('include.contacto')
    <!--Pie de pagina-->
	@include('include.footer')
	<!--Scroll Up-->
	@include('include.scrollUp', ['id' => 'top'])
@endsection