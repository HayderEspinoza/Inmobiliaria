@extends('layouts.tema')
@section('title')
	Inmuebles
@endsection
@section('contenido')
	<div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1 id="tables">Inmuebles</h1>
            </div>
            <div class="well row">
                <div class="col-lg-12">
                    <a href="{{ route('inmueble.create') }}" class="btn btn-success btn-sm    ">
                        <i class="fa fa-plus"></i>
                        Agregar
                    </a>
                </div>
            </div>
            <div class="bs-component">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tipo Propiedad</th>
                            <th>Descripcion</th>
                            <th>Ciudad</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($inmuebles as $index => $inmueble)
                            <tr>
                                <td>{{ $index + 1}}</td>
                                <td>{{ $inmueble->nombre }}</td>
                                <td>{{ $inmueble->descripcion }}</td>
                                <td>{{ $inmueble->ciudad }}</td>
                                <td>{{ $inmueble->precio}}</td>
                                <td>
                                	<a href="{{route('inmueble.show', $inmueble->id)}}" class="label label-primary">Detallar</a>
                                	<a href="{{route('inmueble.edit', $inmueble->id)}}" class="label label-success">Editar</a>
                                	<a href="{{route('inmueble.destroy', $inmueble->id)}}" class="label label-danger" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Esta seguro de eliminar?">Eliminar</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> 
            </div>
            <div class="bs-component">
                {{ $inmuebles->links() }}
            </div>
        </div>
    </div>
@endsection