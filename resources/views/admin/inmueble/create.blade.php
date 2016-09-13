@extends('layouts.tema')
@section('title')
	Crear Inmueble
@endsection
@section('contenido')
	<div class="row">
        <div class="col-md-8 block-center">
            <div class="page-header">
                <h2 id="tables">Crear Inmueble</h2>
            </div>
            <div class="well">
                {{ Form::open(['route' => 'inmueble.store', 'method' => 'post']) }}
                    <div class="form-group">
                        <label for="tipo_id">Tipo de Propiedad</label>
                        {{ Form::select('tipo_id', $tipos, null, ['class' => 'form-control', 'required']) }}
                    </div>
                    <div class="form-group">
                        <label for="tipo_id">Ciudad</label>
                        {{ Form::select('ciudad_id', $ciudades, null, ['class' => 'form-control', 'required']) }}
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        {{ Form::text('direccion', null, ['class' => 'form-control', 'required']) }}
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="habitacion">Habitaciones</label>
                            {{ Form::number('habitacion', null, ['class' => 'form-control', 'placeholder' => 'Cantidad', 'required' ]) }}
                        </div>
                        <div class="form-group col-md-6">
                            <label for="banho">Baños</label>
                            {{ Form::number('banho', null, ['class' => 'form-control', 'placeholder' => 'Cantidad', 'required' ]) }}
                        </div>
                        <div class="form-group col-md-6">
                            <label for="area">Area Cuadrada</label>
                            {{ Form::number('area', null, ['class' => 'form-control', 'placeholder' => 'Cantidad', 'required' ]) }}
                        </div>
                        <div class="form-group col-md-6">
                            <label for="antiguedad">Antiguedad</label>
                            {{ Form::number('antiguedad', null, ['class' => 'form-control', 'placeholder' => 'Cantidad', 'required' ]) }}
                        </div>
                        <div class="form-group col-md-12">
                            <label for="precio">Precio</label>
                            {{ Form::number('precio', null, ['class' => 'form-control', 'placeholder' => 'Precio', 'required' ]) }}
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox">
                                <label>
                                    {{Form::checkbox('piscina', null)}} Piscina
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="parqueadero"> Parqueadero
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Cocina Integral
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Zona Residencial
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Conjunto Cerrado
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Porteria
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Patio
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="submit" class="btn btn-primary btn-block btn-lg">
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection