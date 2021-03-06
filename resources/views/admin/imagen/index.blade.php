@extends('layouts.tema')
@section('title')
	Inmuebles
@endsection
@section('inmueble')
    class='active'
@endsection
@section('contenido')
	<div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1 id="tables">Imagenes</h1>
            </div>
            <div class="well row">
                <div class="col-lg-12">
                    <a href="{{ route('inmueble.imagen.create', $inmueble->id) }}" class="btn btn-success btn-sm    ">
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
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($imagenes as $i => $imagen)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $imagen->nombre }}</td>
                                <td>
                                    <a href="/img/inmuebles/{{ $imagen->nombre }}" target="_blank" class="image-link label label-primary"></a>

                                    <a href="/img/inmuebles/{{ $imagen->nombre }}" target="_blank" class="image-link label label-primary">Ver</a>

                                    <a href="{{route('inmueble.imagen.destroy', [$inmueble->id, $imagen->id])}}" class="label label-danger" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Esta seguro de eliminar?">Eliminar</a>
                                    
                                    <a href="{{route('imagen.perfil', $imagen->id)}}" class="label label-{{ $imagen->class }}" data-method="put" data-token="{{csrf_token()}}" data-confirm="Esta sera su siguiente imagen de portada?">Portada</a>
                                    
                                    <a href="{{ route('web.inmueble', $inmueble->id) }}" class="label label-warning" target="_blank">
                                        Web
                                    </a>
                                    &nbsp;
                                    <a href="{{ route('rotate.left', [$inmueble->id, $imagen->id]) }}" class="label label-success" data-method="put" data-token="{{ csrf_token() }}">
                                        <i class="fa fa-rotate-left"></i>
                                    </a>
                                    
                                    <a href="{{ route('rotate.right', [$inmueble->id, $imagen->id]) }}" class="label label-success" data-method="put" data-token="{{ csrf_token() }}">
                                        <i class="fa fa-rotate-right"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> 
            </div>
            <div class="bs-component">
                
            </div>
        </div>
    </div>
@endsection