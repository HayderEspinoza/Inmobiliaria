@extends('layouts.template')
@section('estilos')
	<style>
		body{
			background: #191a1c;
		}
        .logo-apartamentos{
            padding: 30px 0 40px 0;
        }
	</style>
@endsection
@section('contenido')
    @include('include.menu')
    @include('include.toggle')
	<div class="container" id="top">
        <div class="col-lg-12 logo logo-apartamentos">
            <span class="one">INMOBILIARIA</span><br>
            <span class="two">SANTO DOMINGO CARTAGENA</span>
        </div>
		<div class="col-lg-12 text-pagination">
			MOSTRANDO {{ $inmuebles->count() }} DE {{ $inmuebles->total() }} INMUEBLES
		</div>
        <!--Formulario-->
		<div class="col-lg-3 formulario">
			<div class="row">
				<div class="col-lg-12 text-center title-formulario">
					BUSQUEDA
				</div>
			</div>
			<br>
			<div class="form-group">
				<label for="tipo_id">TIPO DE PROPIEDAD</label>
				{{ Form::select('tipo_id', $tipos, null, ['class' => 'form-control']) }}
			</div>
            <div class="form-group">
                <label for="oferta_id">TIPO DE OFERTA</label>
                {{ Form::select('oferta_id', $ofertas, null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                <label for="ciudad_id">Direccion</label>
                {{ Form::select('ciudad_id', $ciudades, null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
            {{ Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Barrio']) }}
            </div>
            <div class="row">
            	<div class="form-group col-md-6">
            		<label for="precio">Precio</label>
            		{{ Form::text('precio_min', null, ['class' => 'form-control moneda', 'placeholder' => "Min"]) }}
            	</div>
            	<div class="form-group col-md-6">
            		<label for="precio">&nbsp;</label>
            		{{ Form::text('precio_max', null, ['class' => 'form-control moneda', 'placeholder' => 'Max']) }}
            	</div>
            </div>
            <div class="row">
            	<div class="form-group col-md-6">
            		<label for="habitacion">Habitaciones</label>
            		{{ Form::text('habitacion', null, ['class' => 'form-control']) }}
            	</div>
            	<div class="form-group col-md-6">
            		<label for="banho">Baños</label>
            		{{ Form::text('banho', null, ['class' => 'form-control']) }}
            	</div>
            	<div class="form-group col-md-6">
            		<label for="area">Area</label>
            		{{ Form::text('area', null, ['class' => 'form-control']) }}
            	</div>
            	<div class="form-group col-md-6">
            		<label for="antiguedad">Antiguedad</label>
            		{{ Form::text('antiguedad', null, ['class' => 'form-control']) }}
            	</div>
            </div>
            <div class="row">
				<div class="col-lg-12 text-center title-formulario">
					CARACTERISTICAS EXTRAS
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox">
  					<label><input type="checkbox" value="" name="piscina">Piscina</label>
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox">
  					<label><input type="checkbox" value="" name="parqueadero">Parqueadero</label>
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox">
  					<label><input type="checkbox" value="" name="cocina">Cocina Integral</label>
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox">
  					<label><input type="checkbox" value="" name="zona_residencial">Zona Residencial</label>
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox">
  					<label><input type="checkbox" value="" name="conjunto_cerrado">Conjunto Cerrado</label>
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox">
  					<label><input type="checkbox" value="" name="porteria">Porteria</label>
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox">
  					<label><input type="checkbox" value="" name="patio">Patio</label>
				</div>
			</div>
			<div class="form-group">
                <a href="{{route('web.apartamentos')}}" class="btn-danger text-center btn-lg btn-block buscar">
                    BUSCAR
                </a>
            </div>
		</div>
		<div class="col-lg-9">	
            <!--Item-->
            @foreach($inmuebles as $inmueble)
            	<div class="col-lg-4">
	                <div class="apartamento">
	                    <div class="img-apartamento img-responsive">
	                        <img class="img-responsive" src="{{asset('img/apartamento.jpg')}}" alt="">
	                    </div>
	                    <div class="tipo-apartamento text-right">
	                        {{ $inmueble->oferta }}
	                    </div>
	                    <div class="descripcion">
	                        <h3 class="text-center">
	                        	{{ $inmueble->tipo }}
	                        </h3>
	                        <p class="precio text-center">
	                            <span class="">
	                                $ {{ $inmueble->precio }}
	                            </span>
	                        </p>
	                        <table width="100%">
	                            <tr>
	                                <td>Area</td>
	                                <td>Habs</td>
	                                <td>Baños</td>
	                                <td>Antig</td>
	                            </tr>
	                            <tr>
	                                <td> {{ $inmueble->area }} M2</td>
	                                <td> {{ $inmueble->habitacion }}</td>
	                                <td> {{ $inmueble->banho }}</td>
	                                <td> {{ $inmueble->antiguedad }}</td>
	                            </tr>
	                        </table>
	                    </div>
	                </div>
	            </div>
            @endforeach
            
            <!--Paginacion-->
            <div class="col-lg-12">
            	{{ $inmuebles->links() }}
            </div>
		</div>
	</div>
	<!--Pie de pagina-->
	@include('include.footer')
	<!--Scroll Up-->
	@include('include.scrollUp', ['id' => 'top'])
@endsection