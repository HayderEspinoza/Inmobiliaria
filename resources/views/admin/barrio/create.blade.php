@extends('layouts.tema')
@section('title')
	Crear Barrio
@endsection
@section('barrio')
    class='active'
@endsection
@section('contenido')
	<div class="row">
        <div class="col-md-12 block-center">
            <div class="page-header">
                <h2 id="tables">Crear Barrio</h2>
            </div>
            <div class="well row">
                {{ Form::open(['route' => 'barrio.store', 'method' => 'post']) }}
                    <div class="form-group col-md-3">
                        <label for="nombre">Nombre</label>
                        {{ Form::text('nombre', null, ['class' => 'form-control'])}}
                    </div>
                    <div class="form-group col-md-3">
                        <label for="descripcion">Descripcion</label>
                        {{ Form::text('descripcion', null, ['class' => 'form-control'])}}
                    </div>
                    
                    <div class="col-lg-12">
                        <input type="submit" class="btn btn-primary btn-lg">
                    </div>                    
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection