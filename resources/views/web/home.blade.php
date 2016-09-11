@extends('layout.template')
@section('estilos')
    <style>
        .fill{
            overflow: hidden;
        }
        .item .fill h2{
            z-index: 50;
        }
    </style>
@endsection
@section('contenido')
    @include('include.menu')
    @include('include.toggle')
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
                        <div class="col-lg-10">
                            <h2>NUNCA FUE TAN FÁCIL CONSEGUIR PROPIEDADES CARTAGENA.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/img/portada/02.jpg');">
                    <div class="container">
                        <div class="col-lg-7 pull-right">
                            <h2>SU INVERSIÓN EN LAS MEJORES MANOS.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/img/portada/03.jpg');">
                    <div class="container">
                        <div class="col-lg-8 pull-right">
                            <h2>AYUDAMOS A NUESTROS CLIENTES A TOMAR BUENAS DECISIONES.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/img/portada/04.jpg');">
                    <div class="container">
                        <div class="col-lg-8 block-center">
                            <h2>DÉJAMOS GUIARTE A CASA.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- busqueda --}}
        <div class="busqueda-portada">
            <span class="icon-search icono-search"></span>
            BUSCAR APARTAMENTO
        </div>
        <!--Formulario de busqueda-->
        <div class="formulario-portada">
            <form action="">
                <div class="form-group">
                    <select name="" id="" class="form-control">
                        <option value="1">Calle Nueva</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="" id="" class="form-control">
                        <option value="1">Calle Nueva</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="" id="" class="form-control">
                        <option value="1">Calle Nueva</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="" id="" class="form-control">
                        <option value="1">Calle Nueva</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="" id="" class="form-control">
                        <option value="1">Calle Nueva</option>
                    </select>
                </div>
                <div class="form-group">
                    <a href="{{route('web.apartamentos')}}" class="btn-danger text-center btn-lg btn-block buscar">
                        BUSCAR
                    </a>
                </div>
            </form>
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
            <!--Item-->
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="apartamento">
                    <div class="img-apartamento img-responsive">
                        <img class="img-responsive" src="{{asset('img/apartamento.jpg')}}" alt="">
                    </div>
                    <div class="tipo-apartamento text-right">
                        ARRIENDO
                    </div>
                    <div class="descripcion">
                        <h3 class="text-center">APARTAMENTO</h3>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium officia ex esse, numquam ea, nesciunt nihil sunt ratione earum velit, delectus libero? Alias odit, iure omnis eos illum blanditiis, sunt!
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
                        <img class="img-responsive" src="{{asset('img/apartamento.jpg')}}" alt="">
                    </div>
                    <div class="tipo-apartamento text-right">
                        ARRIENDO
                    </div>
                    <div class="descripcion">
                        <h3 class="text-center">APARTAMENTO</h3>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium officia ex esse, numquam ea, nesciunt nihil sunt ratione earum velit, delectus libero? Alias odit, iure omnis eos illum blanditiis, sunt!
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
                        <img class="img-responsive" src="{{asset('img/apartamento.jpg')}}" alt="">
                    </div>
                    <div class="tipo-apartamento text-right">
                        ARRIENDO
                    </div>
                    <div class="descripcion">
                        <h3 class="text-center">APARTAMENTO</h3>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium officia ex esse, numquam ea, nesciunt nihil sunt ratione earum velit, delectus libero? Alias odit, iure omnis eos illum blanditiis, sunt!
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
    <!--Pie de Pagina-->
    @include('include.footer')
    <!--Scroll Up-->
    @include('include.scrollUp', ['id' => 'myCarousel'])
@endsection
@section('js')
    <script>
        $(window).on('load', function(){
            /*$('.carousel').carousel({
                interval: 9000
            });*/
            $('.busqueda-portada').on('click', function(){
                $('.formulario-portada').slideToggle();
            });
        });
    </script>
@endsection
