@extends('layouts.tema')
@section('title')
	Inmuebles
@endsection
@section('ciudad')
    class='active'
@endsection
@section('contenido')
	<div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1 id="tables">Ciudades</h1>
            </div>
            <div class="well row">
                <div class="col-lg-12">
                    <a href="{{ route('ciudad.create') }}" class="btn btn-success btn-sm    ">
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
                        @foreach($ciudades as $index => $ciudad)
                            <tr>
                                <td>{{ $index + 1}}</td>
                                <td>{{ $ciudad->nombre }}</td>
                                <td>{{ $ciudad->descripcion }}</td>
                                <td>
                                	<a href="{{route('ciudad.edit', $ciudad->id)}}" class="label label-success">Editar</a>
                                	<a href="{{route('ciudad.destroy', $ciudad->id)}}" class="label label-danger" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Esta seguro de eliminar?">Eliminar</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> 
            </div>
            <div class="bs-component">
                {{ $ciudades->links() }}
            </div>
        </div>
    </div>
@endsection