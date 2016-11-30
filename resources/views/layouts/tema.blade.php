<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'Inmobiliaria Santo Domingo')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Croppy -->
    {{-- <link href="{{ asset('/css/croppic.css') }}" rel="stylesheet" type="text/css"> --}}
    <link href="{{ asset('/css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .block-center{
            float:none;
            margin:auto;
        }
        thead th, tbody td{
            text-align: center;
        }
        .flash{
            width: 300px;
            position:absolute; 
            right:2%; 
            top:2%;
        }
        textarea{
            border:1px solid #ddd !important;
            border-radius:5px;
        }
    </style>
    @yield('css')
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Inmobiliaria Santo Domingo</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    <li @yield('inmueble')>
                        <a href="{{route('inmueble.index')}}">
                            Inmuebles
                        </a>
                    </li>
                    <li @yield('tipo')>
                        <a href="{{route('tipo.index')}}">
                            Tipo de Propiedad
                        </a>
                    </li>
                    <li @yield('ciudad')>
                        <a href="{{route('ciudad.index')}}">
                            Ciudades
                        </a>
                    </li>
                    <li @yield('barrio')>
                        <a href="{{route('barrio.index')}}">
                            Barrios
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/logout" class="">
                            Salir
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container">
        @yield('contenido')
    </div>
    @if(Session::has('mensaje'))
        <div class="row">
            <div class="flash">
                <div class="alert alert-dismissible alert-{{Session::get('color-mensaje', 'primary')}}">
                    <button type="button" class="close">&times;</button>
                    <strong>Mensaje</strong>
                    <p>
                        {{Session::get('mensaje')}}
                    </p>
                </div>
            </div>
        </div>
    @endif
    <!-- jQuery -->
    <script src=" {{ asset('js/jquery.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/laravel.js') }}"></script>
    <script src="{{ asset('js/accion.js') }}"></script>
    <script src="{{ asset('js/jquery.number.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/croppic.min.js') }}"></script>
</body>
</html>
