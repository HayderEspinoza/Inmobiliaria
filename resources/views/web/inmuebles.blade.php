@extends('layouts.template')
@section('estilos')
	<style>
        .logo-apartamentos{
            padding: 30px 0 40px 0;
        }
        .container{
        	width:90%;
        }
	</style>
@endsection
@section('inmuebles')
	class="active"
@stop
@section('contenido')
	<div class="container" id="top">
        {{-- <div class="col-lg-12 logo logo-apartamentos">
            <span class="one">INMOBILIARIA</span><br>
            <span class="two">SANTO DOMINGO CARTAGENA</span>
        </div> --}}
		<div class="col-lg-12 text-pagination">
			MOSTRANDO {{ $inmuebles->count() }} DE {{ $inmuebles->total() }} INMUEBLES ENCONTRADOS
		</div>
        <!--Formulario-->
		<div class="col-lg-3 formulario">
			{{ Form::open(['route' => 'web.inmuebles', 'method' => 'get']) }}
				<div class="row">
					<div class="col-lg-12 text-center title-formulario">
						BUSQUEDA
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="tipo_id">TIPO DE PROPIEDAD</label>
					{{ Form::select('tipo_id', $tipos, @$inputs['tipo_id'], ['class' => 'form-control']) }}
				</div>
	            <div class="form-group">
	                <label for="oferta_id">TIPO DE OFERTA</label>
	                {{ Form::select('oferta_id', $ofertas, @$inputs['oferta_id'], ['class' => 'form-control']) }}
	            </div>
	            <div class="form-group">
	                <label for="ciudad_id">Ciudad</label>
	                {{ Form::select('ciudad_id', $ciudades, @$inputs['ciudad_id'], ['class' => 'form-control']) }}
	            </div>
	            <div class="form-group">
	                <label for="barrio_id">Barrio</label>
	                {{ Form::select('barrio_id', $barrios, @$inputs['barrio_id'], ['class' => 'form-control']) }}
	            </div>
	            <div class="form-group">
	            	{{ Form::text('direccion', @$inputs['direccion'], ['class' => 'form-control', 'placeholder' => 'Direccion']) }}
	            </div>
	            <div class="row">
	            	<div class="form-group col-md-6">
	            		<label for="precio_min">Precio</label>
	            		{{ Form::text('precio_min', @$inputs['precio_min'], ['class' => 'form-control moneda', 'placeholder' => "Min"]) }}
	            	</div>
	            	<div class="form-group col-md-6">
	            		<label for="precio_max">&nbsp;</label>
	            		{{ Form::text('precio_max', @$inputs['precio_max'], ['class' => 'form-control moneda', 'placeholder' => 'Max']) }}
	            	</div>
	            </div>
	            <div class="row">
	            	<div class="form-group col-md-6">
	            		<label for="habitacion">Habitaciones</label>
	            		{{ Form::text('habitacion', @$inputs['habitacion'], ['class' => 'form-control']) }}
	            	</div>
	            	<div class="form-group col-md-6">
	            		<label for="banho">Baños</label>
	            		{{ Form::text('banho', @$inputs['banho'], ['class' => 'form-control']) }}
	            	</div>
	            	<div class="form-group col-md-6">
	            		<label for="area">Area</label>
	            		{{ Form::text('area', @$inputs['area'], ['class' => 'form-control']) }}
	            	</div>
	            	<div class="form-group col-md-6">
	            		<label for="antiguedad">Antiguedad</label>
	            		{{ Form::text('antiguedad', @$inputs['antiguedad'], ['class' => 'form-control']) }}
	            	</div>
	            </div>
	            <div class="row">
					<div class="col-lg-12 text-center title-formulario">
						CARACTERISTICAS EXTRAS
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
	  					<label>
	  						{{Form::checkbox('piscina', 1, @$inputs['piscina'])}} Piscina
	  					</label>
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
	  					<label>
	  						{{Form::checkbox('parqueadero', 1, @$inputs['parqueadero'])}} Parqueadero
	  					</label>
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
	  					<label>
	  						{{Form::checkbox('cocina', 1, @$inputs['cocina'])}} Cocina Integral
	  					</label>
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
	  					<label>
	  						{{Form::checkbox('zona_residencial', 1, @$inputs['zona_residencial'])}}
	  						Zona Residencial
	  					</label>
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
	  					<label>
	  						{{Form::checkbox('conjunto_cerrado', 1, @$inputs['conjunto_cerrado'])}} Conjunto Cerrado
	  					</label>
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
	  					<label>
	  						{{Form::checkbox('porteria', 1, @$inputs['porteria'])}} Porteria
	  					</label>
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
	  					<label>
                            {{Form::checkbox('patio', 1, @$inputs['patio'])}} Patio
	  					</label>
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
	  					<label>
                            {{Form::checkbox('salon', 1, @$inputs['salon'])}} Salon
	  					</label>
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
	  					<label>
                            {{Form::checkbox('cocineta', 1, @$inputs['cocineta'])}} Cocineta
	  					</label>
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
	  					<label>
                            {{Form::checkbox('mezanine', 1, @$inputs['mezanine'])}} Mezanine
	  					</label>
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
	  					<label>
                            {{Form::checkbox('cuarto_servicio', 1, @$inputs['cuarto_servicio'])}} Cuarto Servicio
	  					</label>
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
	  					<label>
                            {{Form::checkbox('banho_servicio', 1, @$inputs['banho_servicio'])}} Baño Servicio
	  					</label>
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
	  					<label>
                            {{Form::checkbox('locker', 1, @$inputs['locker'])}} Locker
	  					</label>
					</div>
				</div>
				<div class="form-group">
	                <input type="submit" class="btn-danger text-center btn-lg btn-block buscar" value="BUSCAR" name="buscar">
	            </div>
			{{ Form::close() }}
		</div>
		<div class="col-lg-9">	
            <!--Item-->
            @foreach($inmuebles as $inmueble)
            	<div class="col-lg-4">
	                <div class="apartamento">
	                    <div class="img-apartamento img-responsive">
	                    	@if($inmueble->imagen == null)
	                        	<a href="{{ route('web.inmueble', $inmueble->id) }}">
	                        		<img class="img-responsive" src="{{asset('img/inmuebles/default2.png')}}" alt="">
	                        	</a>
	                        @else
	                        	<a href="{{ route('web.inmueble', $inmueble->id) }}">
	                        		<img class="img-responsive" src="{{asset('img/inmuebles/'.$inmueble->imagen)}}" alt="">
	                        	</a>
	                        @endif
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
	                                $ {{ number_format($inmueble->precio, 0) }}
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