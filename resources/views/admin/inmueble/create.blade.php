@extends('layouts.tema')
@section('title')
	Crear Inmueble
@endsection
@section('contenido')
	<div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1 id="tables">Crear Inmueble</h1>
            </div>
        </div>
        <div class="col-lg-4">
            {{ Form::open(['route' => 'inmueble.store', 'method' => 'post']) }}
                <div class="form-group">
                    <label for="tipo_id">Tipo de Propiedad</label>
                    {{ Form::select('tipo_id', $tipos, null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <label for="tipo_id">Ciudad</label>
                    {{ Form::select('ciudad_id', $ciudades, null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    {{ Form::text('direccion', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <label for="habitacion">Habitacion</label>
                    {{ Form::number('habitacion', null, ['class' => 'form-control', 'placeholder' => '#' ]) }}
                </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection