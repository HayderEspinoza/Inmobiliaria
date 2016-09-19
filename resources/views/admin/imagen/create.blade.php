@extends('layouts.tema')
@section('title')
	Agregar Imagen
@endsection
@section('inmueble')
    class='active'
@endsection
@section('contenido')
	<div class="row">
        <div class="col-md-12 block-center">
            <div class="page-header">
                <h2 id="tables">Agregar Imagen</h2>
            </div>
            <div class="well row">
                {{ Form::open(['route' => ['inmueble.imagen.store', $inmueble->id], 'method' => 'post', 'files' => true]) }}
                    <div class="form-group col-md-12">
                        <input name="nombre" type="file" class="form-control" accept="image/*" required>
                    </div>
                    <div class="col-lg-12">
                        <input type="submit" class="btn btn-primary btn-lg">
                    </div>                    
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection