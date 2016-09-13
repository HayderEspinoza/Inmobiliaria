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
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tipo Propiedad</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Finca</td>
                            <td>Finca las 3 marias</td>
                            <td>
                            	<a href="" class="label label-primary">Detallar</a>
                            	<a href="" class="label label-success">Editar</a>
                            	<a href="" class="label label-danger">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table> 
            </div>
            <div class="bs-component">
                <ul class="pagination">
                    <li class="disabled"><a href="#">«</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection