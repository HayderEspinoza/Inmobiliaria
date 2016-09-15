@extends('layouts.tema')
@section('title')
    Editar Ciudad
@endsection
@section('tipo')
    class='active'
@endsection
@section('contenido')
    <div class="row">
        <div class="col-md-12 block-center">
            <div class="page-header">
                <h2 id="tables">Editar Ciudad</h2>
            </div>
            <div class="well row">
                {{ Form::model($ciudad, ['route' => ['ciudad.update', $ciudad->id], 'method' => 'put']) }}
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