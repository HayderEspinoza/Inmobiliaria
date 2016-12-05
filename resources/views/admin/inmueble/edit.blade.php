@extends('layouts.tema')
@section('title')
	Editar Inmueble
@endsection
@section('inmueble')
    class='active'
@endsection
@section('contenido')
	<div class="row">
        <div class="col-md-12 block-center">
            <div class="page-header">
                <h2 id="tables">Editar Inmueble</h2>
            </div>
            <div class="well row">
                {{ Form::model($inmueble, ['route' => ['inmueble.update', $inmueble->id], 'method' => 'put']) }}
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="tipo_id">Tipo de Propiedad</label>
                            {{ Form::select('tipo_id', $tipos, null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group col-md-3">
                            <label for="oferta_id">Oferta</label>
                            {{ Form::select('oferta_id', $ofertas, null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group col-md-3">
                            <label for="tipo_id">Ciudad</label>
                            {{ Form::select('ciudad_id', $ciudades, null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group col-md-3">
                            <label for="tipo_id">Barrio</label>
                            {{ Form::select('barrio_id', $barrios, null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group col-md-3">
                            <label for="direccion">Direccion</label>
                            {{ Form::text('direccion', null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group col-md-3">
                            <label for="precio">Precio</label>
                            {{ Form::text('precio', null, ['class' => 'form-control moneda', 'placeholder' => '', 'required' ]) }}
                        </div>
                        <div class="form-group col-md-3">
                            <label for="habitacion">Habitaciones</label>
                            {{ Form::number('habitacion', null, ['class' => 'form-control', 'placeholder' => '', 'required' ]) }}
                        </div>
                        <div class="form-group col-md-3">
                            <label for="banho">Baños</label>
                            {{ Form::number('banho', null, ['class' => 'form-control', 'placeholder' => '', 'required' ]) }}
                        </div>
                        <div class="form-group col-md-3">
                            <label for="area">Area Cuadrada</label>
                            {{ Form::number('area', null, ['class' => 'form-control', 'placeholder' => '', 'required' ]) }}
                        </div>
                        <div class="form-group col-md-3">
                            <label for="antiguedad">Antiguedad</label>
                            {{ Form::number('antiguedad', null, ['class' => 'form-control', 'placeholder' => '' ]) }}
                        </div>
                    </div>
                    <!--Checkbox-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="checkbox">
                                <label>
                                    {!! Form::hidden('piscina', false) !!}
                                    {{Form::checkbox('piscina', null)}} Piscina
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="checkbox">
                                <label>
                                    {!! Form::hidden('parqueadero', false) !!}
                                    {{Form::checkbox('parqueadero', null)}} Parqueadero
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="checkbox">
                                <label>
                                    {!! Form::hidden('cocina', false) !!}
                                    {{Form::checkbox('cocina', null)}} Cocina Integral
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="checkbox">
                                <label>
                                    {!! Form::hidden('zona_residencial', false) !!}
                                    {{Form::checkbox('zona_residencial', null)}} Zona Residencial
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="checkbox">
                                <label>

                                    {!! Form::hidden('conjunto_cerrado', false) !!}
                                    {{Form::checkbox('conjunto_cerrado', null)}} Conjunto Cerrado
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="checkbox">
                                <label>
                                    {!! Form::hidden('porteria', false) !!}
                                    {{Form::checkbox('porteria', null)}} Porteria
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="checkbox">
                                <label>
                                    {!! Form::hidden('patio', false) !!}
                                    {{Form::checkbox('patio', null)}} Patio
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="checkbox">
                                <label>
                                    {!! Form::hidden('salon', false) !!}
                                    {{Form::checkbox('salon', null)}} Salón
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="checkbox">
                                <label>
                                    {!! Form::hidden('cocineta', false) !!}
                                    {{Form::checkbox('cocineta', null)}} Cocineta
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="checkbox">
                                <label>
                                    {!! Form::hidden('mezanine', false) !!}
                                    {{Form::checkbox('mezanine', null)}} Mezanine
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="checkbox">
                                <label>
                                    {!! Form::hidden('cuarto_servicio', false) !!}
                                    {{Form::checkbox('cuarto_servicio', null)}} Cuarto Servicio
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="checkbox">
                                <label>
                                    {!! Form::hidden('banho_servicio', false) !!}
                                    {{Form::checkbox('banho_servicio', null)}} Baño Servicio
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="checkbox">
                                <label>
                                    {!! Form::hidden('locker', false) !!}
                                    {{Form::checkbox('locker', null)}} locker
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="checkbox">
                                <label>
                                    {!! Form::hidden('balcon', false) !!}
                                    {{Form::checkbox('balcon', null)}} Balcon
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="checkbox">
                                <label>
                                    {!! Form::hidden('terraza', false) !!}
                                    {{Form::checkbox('terraza', null)}} Terraza
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            {{ Form::textarea('descripcion', null, ['class' => 'form-control', 'size' => '5x3', 'placeholder' => 'Descripcion del Inmueble']) }}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        
                    </div>
                    <div class="col-lg-12">
                        <input type="submit" class="btn btn-primary btn-lg">
                    </div>                    
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection