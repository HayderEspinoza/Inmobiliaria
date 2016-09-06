@extends('layout.template')
@section('estilos')
	<style>
		.contacto{
			background: #191A1C;
			padding-top: 0 !important;
		}
		input, textarea, checkbox-inline{
			background: #191A1C !important;
		}
		.btn{
			background: transparent;
			color: white;
			border:1px solid #ccc !important;
		}
		.btn:hover{
			background: #292B2E !important;
			color:white;
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