@extends('layouts.template')
@section('estilos')
	<style>
		body{
			background: #f8f8f8;
		}
		.wrap-detalles{
			padding-bottom: 40px;
		}
	</style>
@endsection
@section('inmuebles')
	class="active"
@stop
@section('contenido')
	<div class="container wrap-detalles">
		{{-- <div class="col-lg-12 logo logo-apartamentos">
            <div class="col-lg-12">
            	<span class="one">INMOBILIARIA</span><br>
	            <span class="two">SANTO DOMINGO CARTAGENA</span>
            </div>
        </div> --}}
        <div class="col-lg-12">
        	<br><br>
        	<br>
        	<br>
        	<p class="oferta-imagen">
        		{{ $inmueble->tipo }} EN {{ $inmueble->oferta }}
        	</p>
	        <p class="direccion-imagen">
	        	{{ $inmueble->direccion }}
	        </p>
	        <br>
        </div>
		<div class="col-md-8">
			<div id="img-portada" class="carousel slide" data-ride="carousel">
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner show-image" role="listbox">
			  	@foreach ($imagenes as $index => $imagen)
			  		@if ($index == 0)
			  			<a href="{{ asset('/img/inmuebles/'.$imagen->nombre) }}" class="item active image-link">
					      <img src="{{ asset('/img/inmuebles/'.$imagen->nombre) }}" alt="Prueba">
					    </a>
			  		@else
					    <a href="{{ asset('/img/inmuebles/'.$imagen->nombre) }}" class="item image-link">
					      <img src="{{ asset('/img/inmuebles/'.$imagen->nombre) }}" alt="Prueba">
					    </a>
			  		@endif
				@endforeach
			  </div>
			  <!-- Controls -->
				<a class="left carousel-control" href="#img-portada" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#img-portada" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				<!-- Indicators -->
			</div>
				@foreach ($imagenes as $index => $imagen)
					<div data-target="#img-portada" data-slide-to="{{ $index }}" class="col-lg-3 imagen-detalle">
						<img src="{{ asset('/img/inmuebles/'.$imagen->nombre) }}" alt="" class="img-responsive">
					</div>
				@endforeach
			
		</div>
		<div class="col-md-4">
			<div class="row">
				<div class="col-lg-12 formulario">
					{{ Form::open(['route' => ['web.interesaInmueble', $inmueble->id], 'method' => 'get']) }}
						<div class="row">
							<div class="col-lg-12 text-center title-formulario">
								CONTACTAR POR INMUEBLE
							</div>
						</div>
						<br>
						<div class="form-group">
							<label for="nombre">NOMBRE</label>
							{{ Form::text('nombre', null, ['class' => 'form-control', 'required']) }}
						</div>
						<div class="form-group">
							<label for="email">EMAIL</label>
							{{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
						</div>
						<div class="form-group">
							<label for="telefono">TELEFONO</label>
							{{ Form::number('telefono', null, ['class' => 'form-control', 'required']) }}
						</div>
						<div class="form-group">
							<label for="asunto">ASUNTO</label>
							{{ Form::textarea('asunto', null, ['class' => 'form-control', 'size' => '5x7', 'required']) }}
						</div>
						<div class="form-group hidden">
							{{ Form::text('inmueble', $inmueble->id, ['class' => 'form-control']) }}
						</div>
						<div class="form-group">
			                <input type="submit" class="btn-danger text-center btn-lg btn-block buscar" value="ENVIAR" name="buscar">
			            </div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<br>
			<p class="text-uppercase descripcion-inmueble">Descripcion</p>
		</div>
		<div class="col-md-4 detalles">
			<div class="form-group precio-detalle">
				<label for="" class="col-xs-1 control-label lemon">$</label>
				<div class="col-xs-10 text-left">
					<input type="text" class="moneda texto-moneda lemon" value="{{ $inmueble->precio }}" disabled>
				</div>
			</div>
			<br>
			<table class="tabla-descripcion">
				<tr>
					<th>AREA:</th>
					<td class="text-right">{{ $inmueble->area }} m2</td>
				</tr>
				<tr>
					<th>OFERTA:</th>
					<td class="text-right">{{ $inmueble->oferta }}</td>
				</tr>
				<tr>
					<th>HABITACIONES:</th>
					<td class="text-right">{{ $inmueble->habitacion }}</td>
				</tr>
				<tr>
					<th>BAÑOS:</th>
					<td class="text-right">{{ $inmueble->banho }}</td>
				</tr>
				<tr>
					<th>BARRIO:</th>
					<td class="text-right">{{ $inmueble->direccion }}</td>
				</tr>
				<tr>
					<th>PISCINA:</th>
					<td class="text-right">{{ $inmueble->piscina }}</td>
				</tr>
				<tr>
					<th>PARQUEADERO:</th>
					<td class="text-right">{{ $inmueble->parqueadero }}</td>
				</tr>
				<tr>
					<th>COCINA:</th>
					<td class="text-right">{{ $inmueble->cocina }}</td>
				</tr>
				<tr>
					<th>ZONA RESIDENCIAL:</th>
					<td class="text-right">{{ $inmueble->zona_residencial }}</td>
				</tr>
				<tr>
					<th>CONJUNTO CERRADO:</th>
					<td class="text-right">{{ $inmueble->conjunto_cerrado }}</td>
				</tr>
				<tr>
					<th>PORTERIA:</th>
					<td class="text-right">{{ $inmueble->porteria }}</td>
				</tr>
				<tr>
					<th>PATIO:</th>
					<td class="text-right">{{ $inmueble->patio }}</td>
				</tr>

				<tr>
					<th>SALON:</th>
					<td class="text-right">{{ $inmueble->salon }}</td>
				</tr>
				<tr>
					<th>COCINETA:</th>
					<td class="text-right">{{ $inmueble->cocineta }}</td>
				</tr>
				<tr>
					<th>MEZANINE:</th>
					<td class="text-right">{{ $inmueble->mezanine }}</td>
				</tr>
				<tr>
					<th>CUARTO DE SERVICIO:</th>
					<td class="text-right">{{ $inmueble->cuarto_servicio }}</td>
				</tr>
				<tr>
					<th>BAÑO DE SERVICIO:</th>
					<td class="text-right">{{ $inmueble->banho_servicio }}</td>
				</tr>
				<tr>
					<th>LOCKER:</th>
					<td class="text-right">{{ $inmueble->locker }}</td>
				</tr>
			</table>
		</div>
		<div class="col-md-8 descripcion-articulo">
			<p>
				{{ $inmueble->descripcion }}
			</p>
		</div>
	</div>
	<div class="destacados" id="destacados">
        <div class="container">
            <div class="title-destacados text-center">
                <span>INMUEBLES DESTACADOS</span>
            </div>
           <div class="col-lg-9 block-center intro-inmuebles">
                @foreach($destacados as $inmueble)
                    <div class="col-lg-4 col-sm-6">
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
                                {{-- <p class="text-justify">
                                    {{ $inmueble->descripcion }}
                                </p> --}}
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
            </div>
        </div>
    </div>
	<!--Pie de pagina-->
	@include('include.footer')
	<!--Scroll Up-->
	@include('include.scrollUp', ['id' => 'top'])
@endsection