@extends('layouts.tema')
@section('title')
	Inmuebles
@endsection
@section('barrio')
    class='active'
@endsection
@section('contenido')
	<div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1 id="tables">Barrios</h1>
            </div>
            <div class="well row">
                <div class="col-lg-12">
                    <a href="{{ route('barrio.create') }}" class="btn btn-success btn-sm    ">
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
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($barrios as $index => $barrio)
                            <tr>
                                <td>{{ $index + 1}}</td>
                                <td>{{ $barrio->nombre }}</td>
                                <td>{{ $barrio->descripcion }}</td>
                                <td>
                                	<a href="{{route('barrio.edit', $barrio->id)}}" class="label label-success">Editar</a>
                                	<a href="{{route('barrio.destroy', $barrio->id)}}" class="label label-danger" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Esta seguro de eliminar?">Eliminar</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> 
            </div>
            <div class="bs-component">
                {{ $barrios->links() }}
            </div>
        </div>
    </div>
@endsection