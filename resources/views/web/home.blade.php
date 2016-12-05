@extends('layouts.template')
@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/camera.css') }}">
    <style>
        .fill{
            overflow: hidden;
        }
        .item .fill h2{
            z-index: 50;
        }
        .formulario-portada label{
            color :white;
        }
    </style>
@endsection
@section('inicio')
    class="active"
@stop
@section('contenido')
    <div class="camera_wrap">
        <div data-src="img/portada/01.jpg"></div>
        <div data-src="img/portada/02.jpg"></div>
        <div data-src="img/portada/03.jpg"></div>
        <div data-src="img/portada/04.jpg"></div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
        <div class="row busqueda-portada">
            {{ Form::open(['route' => 'web.inmuebles', 'method' => 'GET', 'class' => 'form']) }}
                <div class="form-group col-md-2">
                    <label for="tipo_id">Tipo de Inmueble</label>
                    {{ Form::select('tipo_id', $tipos, null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group col-md-2">
                    <label for="oferta_id">Oferta de Inmueble</label>
                    {{ Form::select('oferta_id', $ofertas, null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group col-md-2">
                    <label for="barrio_id">Barrio</label>
                    {{ Form::select('barrio_id', $barrios, null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group col-md-2">
                    <label for="precio_min">Precio</label>
                    {{ Form::text('precio_min', @$inputs['precio_min'], ['class' => 'form-control moneda', 'placeholder' => "Min"]) }}
                </div>
                <div class="form-group col-md-2">
                    <label for="precio_max">&nbsp;</label>
                    {{ Form::text('precio_max', @$inputs['precio_max'], ['class' => 'form-control moneda', 'placeholder' => 'Max']) }}
                </div>
                <div class="form-group col-md-2">
                    <label for="">&nbsp;</label>
                    <input type="submit" class="btn btn-success form-control" name="buscar" value="Buscar">
                </div>
            {{ Form::close() }}
        </div>
        <div class="row">
            @foreach($inmuebles as $inmueble)
                <div class="col-lg-3 col-sm-6">
                    <div class="apartamento">
                        <div class="img-apartamento img-responsive">
                            @if($inmueble->imagen == null)
                                <a href="{{ route('web.inmuebles', ['barrio_id' => $inmueble->barrio_id, 'buscar' => 'buscar']) }}">
                                    <img class="img-responsive" src="{{asset('img/inmuebles/default2.png')}}" alt="">
                                </a>
                            @else
                                <a href="{{ route('web.inmuebles', ['barrio_id' => $inmueble->barrio_id, 'buscar' => 'buscar']) }}">
                                    <img class="img-responsive" src="{{asset('img/inmuebles/'.$inmueble->imagen)}}" alt="">
                                </a>
                            @endif
                        </div>
                        <div class="tipo-apartamento text-center">
                            {{ $inmueble->barrio }}
                        </div>
                        {{-- <div class="descripcion">
                            <h3 class="text-center">
                                {{ $inmueble->tipo }}
                            </h3>
                            <p class="text-justify">
                                {{ $inmueble->descripcion }}
                            </p>
                            <p class="precio text-center">
                                <span class="">
                                    $ {{ number_format($inmueble->precio, 0) }}
                                </span>
                            </p>
                            <table width="100%">
                                <tr>
                                    <td>Area</td>
                                    <td>Habs</td>
                                    <td>Baños</td>
                                    <td>Antig</td>
                                </tr>
                                <tr>
                                    <td> {{ $inmueble->area }} M2</td>
                                    <td> {{ $inmueble->habitacion }}</td>
                                    <td> {{ $inmueble->banho }}</td>
                                    <td> {{ $inmueble->antiguedad }}</td>
                                </tr>
                            </table>
                        </div> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--Pie de Pagina-->
    @include('include.footer')
    <!--Scroll Up-->
    @include('include.scrollUp', ['id' => 'myCarousel'])
@endsection
@section('js')
    <script src="{{ asset('js/jquery-1.7.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mobile-1.4.5.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/camera.min.js') }}"></script>
    <script>
        $(window).on('load', function(){
            $('.busqueda-portada').on('click', function(){
                $('.formulario-portada').slideToggle();
            });
            $('.camera_wrap').camera({
                loader: true,
                autoadvance: true,
                pagination: true ,
                thumbnails: false,
                height: '35%',
                caption: false,
                navigation: true,
                time: 1000
            });
             
            // $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
@endsection
