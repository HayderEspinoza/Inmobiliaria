@extends('layouts.template')
@section('estilos')
    <style>
        .fill{
            overflow: hidden;
        }
f        .item .fill h2{
            z-index: 50;
        }
        .formulario-portada label{
            color :white;
        }
    </style>
@endsection
@section('contenido')
    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill img-1" style="background-image:url('/img/portada/01.jpg')">
                    <div class="container">
                        <div class="col-lg-10 wrap-title">
                            <h2 class="text-left">NUNCA ANTES FUE TAN FÁCIL CONSEGUIR PROPIEDAD EN CARTAGENA.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/img/portada/02.jpg');">
                    <div class="container">
                        <div class="col-lg-7 block-center text-center wrap-title">
                            <h2>SU INVERSIÓN EN LAS MEJORES MANOS.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/img/portada/03.jpg');">
                    <div class="container">
                        <div class="col-lg-7 wrap-title block-center text-center">
                            <h2>AYUDAMOS A NUESTROS CLIENTES A TOMAR BUENAS DECISIONES.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/img/portada/04.jpg');">
                    <div class="container">
                        <div class="row wrap-proyectos">
                            <div class="col-md-4 link-proyectos block-center">
                                <div class="caption-proyectos">
                                    <h4 class="text-center">CONOCE NUESTROS PROYECTOS</h4>
                                </div>
                                <h2 class="text-center">VILLA ESCALLON</h2>
                                <div class="col-sm-12 text-center">
                                    <a href="{{ route('web.proyectos') }}" class="btn">VER PROYECTOS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Formulario de busqueda-->
        <div class="formulario-portada hidden-xs-down">
            {{ Form::open(['route' => 'web.inmuebles', 'method' => 'get']) }}
                <div class="form-group">
                    {{ Form::select('tipo_id', $tipos, @$inputs['tipo_id'], ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <div class="row">
                        @foreach ($ofertas as $oferta)
                            <div class="col-md-6 text-center">
                                <label class="radio-inline">
                                    {{ Form::radio('oferta_id', 1) }}{{ $oferta->nombre }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="form-group hidden">
                    {{ Form::text('ciudad_id', 1) }}
                </div>
                <div class="form-group">
                    {{ Form::text('direccion', @$inputs['direccion'], ['class' => 'form-control', 'placeholder' => 'Barrio']) }}
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="precio">Precio</label>
                        {{ Form::text('precio_min', @$inputs['precio_min'], ['class' => 'form-control moneda', 'placeholder' => "Min"]) }}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="precio">&nbsp;</label>
                        {{ Form::text('precio_max', @$inputs['precio_max'], ['class' => 'form-control moneda', 'placeholder' => 'Max']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="habitacion">Habitaciones</label>
                        {{ Form::text('habitacion', @$inputs['habitacion'], ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="banho">Baños</label>
                        {{ Form::text('banho', @$inputs['banho'], ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="area">Area</label>
                        {{ Form::text('area', @$inputs['area'], ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="antiguedad">Antiguedad</label>
                        {{ Form::text('antiguedad', @$inputs['antiguedad'], ['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn-danger text-center btn-lg btn-block buscar" value="BUSCAR" name="buscar">
                </div>
            {{ Form::close() }}
        </div>
        {{-- scroll down --}}
        <div class="scroll-down text-center">
            <a href="#destacados" class="btn-scroll scroll">
                <span class="icon-arrow-down arrow-scroll"></span>
                
                <p class="scroll-text">
                    SCROLL DOWN
                </p>
            </a>
        </div>
    </header>
    <!-- Destacados-->
    <div class="destacados" id="destacados">
        <div class="container">
            <div class="title-destacados text-center">
                <span>INMUEBLES DETACADOS</span>
            </div>
            <div class="col-lg-9 block-center intro-inmuebles">
                <!--Item-->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="apartamento">
                        <div class="img-apartamento img-responsive">
                            <img class="img-responsive" src="{{asset('img/inmuebles/default.jpg')}}" alt="">
                        </div>
                        <div class="tipo-apartamento text-right">
                            ARRIENDO
                        </div>
                        <div class="descripcion">
                            <h3 class="text-center">APARTAMENTO</h3>
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium officia ex esse, numquam ea, nesciunt nihil sunt ratione.
                            </p>
                            <p class="precio text-center">
                                <span>
                                    $ 1.300.000
                                </span>
                            </p>
                            <table width="100%">
                                <tr>
                                    <td>Area</td>
                                    <td>Habs</td>
                                    <td>Baños</td>
                                    <td>Parq</td>
                                </tr>
                                <tr>
                                    <td>115M2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!--Item-->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="apartamento">
                        <div class="img-apartamento img-responsive">
                            <img class="img-responsive" src="{{asset('img/inmuebles/default.jpg')}}" alt="">
                        </div>
                        <div class="tipo-apartamento text-right">
                            ARRIENDO
                        </div>
                        <div class="descripcion">
                            <h3 class="text-center">APARTAMENTO</h3>
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium officia ex esse, numquam ea, nesciunt nihil sunt ratione.
                            </p>
                            <p class="precio text-center">
                                <span>
                                    $ 1.300.000
                                </span>
                            </p>
                            <table width="100%">
                                <tr>
                                    <td>Area</td>
                                    <td>Habs</td>
                                    <td>Baños</td>
                                    <td>Parq</td>
                                </tr>
                                <tr>
                                    <td>115M2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!--Item-->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="apartamento">
                        <div class="img-apartamento img-responsive">
                            <img class="img-responsive" src="{{asset('img/inmuebles/default.jpg')}}" alt="">
                        </div>
                        <div class="tipo-apartamento text-right">
                            ARRIENDO
                        </div>
                        <div class="descripcion">
                            <h3 class="text-center">APARTAMENTO</h3>
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium officia ex esse, numquam ea, nesciunt nihil sunt ratione.
                            </p>
                            <p class="precio text-center">
                                <span>
                                    $ 1.300.000
                                </span>
                            </p>
                            <table width="100%">
                                <tr>
                                    <td>Area</td>
                                    <td>Habs</td>
                                    <td>Baños</td>
                                    <td>Parq</td>
                                </tr>
                                <tr>
                                    <td>115M2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title-destacados text-center">
                <span>INMUEBLES RECIENTES</span>
            </div>
            <div class="col-lg-9 block-center intro-inmuebles">
                <!--Item-->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="apartamento">
                        <div class="img-apartamento img-responsive">
                            <img class="img-responsive" src="{{asset('img/inmuebles/default.jpg')}}" alt="">
                        </div>
                        <div class="tipo-apartamento text-right">
                            ARRIENDO
                        </div>
                        <div class="descripcion">
                            <h3 class="text-center">APARTAMENTO</h3>
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium officia ex esse, numquam ea, nesciunt nihil sunt ratione.
                            </p>
                            <p class="precio text-center">
                                <span>
                                    $ 1.300.000
                                </span>
                            </p>
                            <table width="100%">
                                <tr>
                                    <td>Area</td>
                                    <td>Habs</td>
                                    <td>Baños</td>
                                    <td>Parq</td>
                                </tr>
                                <tr>
                                    <td>115M2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!--Item-->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="apartamento">
                        <div class="img-apartamento img-responsive">
                            <img class="img-responsive" src="{{asset('img/inmuebles/default.jpg')}}" alt="">
                        </div>
                        <div class="tipo-apartamento text-right">
                            ARRIENDO
                        </div>
                        <div class="descripcion">
                            <h3 class="text-center">APARTAMENTO</h3>
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium officia ex esse, numquam ea, nesciunt nihil sunt ratione.
                            </p>
                            <p class="precio text-center">
                                <span>
                                    $ 1.300.000
                                </span>
                            </p>
                            <table width="100%">
                                <tr>
                                    <td>Area</td>
                                    <td>Habs</td>
                                    <td>Baños</td>
                                    <td>Parq</td>
                                </tr>
                                <tr>
                                    <td>115M2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!--Item-->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="apartamento">
                        <div class="img-apartamento img-responsive">
                            <img class="img-responsive" src="{{asset('img/inmuebles/default.jpg')}}" alt="">
                        </div>
                        <div class="tipo-apartamento text-right">
                            ARRIENDO
                        </div>
                        <div class="descripcion">
                            <h3 class="text-center">APARTAMENTO</h3>
                            <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium officia ex esse, numquam ea, nesciunt nihil sunt ratione.
                            </p>
                            <p class="precio text-center">
                                <span>
                                    $ 1.300.000
                                </span>
                            </p>
                            <table width="100%">
                                <tr>
                                    <td>Area</td>
                                    <td>Habs</td>
                                    <td>Baños</td>
                                    <td>Parq</td>
                                </tr>
                                <tr>
                                    <td>115M2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Pie de Pagina-->
    @include('include.footer')
    <!--Scroll Up-->
    @include('include.scrollUp', ['id' => 'myCarousel'])
@endsection
@section('js')
    <script>
        $(window).on('load', function(){
            $('.busqueda-portada').on('click', function(){
                $('.formulario-portada').slideToggle();
            });
        });
    </script>
@endsection
