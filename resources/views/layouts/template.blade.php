<!DOCTYPE html>
<html lang="es_ES">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="copyright" content="Big Ideas Company">
	<meta name="author" content="Hayder Espinoza">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, , maximum-scale=1">
	<title>Inmobiliaria Santo Domingo Cartagena</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('full-slider/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('full-slider/css/full-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/pace.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/iconos.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .flash{
            width: 300px;
            position:absolute; 
            right:2%; 
            top:2%;
            z-index:1000;
        }
    </style>
	@yield('estilos')
</head>

<body id="top">
    {{-- @include('include.toggle')
    @include('include.menu') --}}
    <nav class="navbar navbar-inverse navbar-static-top navbar-new">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img alt="Inmobiliaria Santo Domingo" src="{{ asset('img/logo.jpg') }}" height="60px">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav navbar-right" >
                    <li @yield('inicio')>
                        <a href="{{route('web.index')}}">
                            Inicio
                        </a>
                    </li>
                    <li @yield('inmobiliaria')>
                        <a href="{{route('web.inmobiliaria')}}">
                            Inmobiliaria
                        </a>
                    </li>
                    <li @yield('servicios')>
                        <a href="{{route('web.servicios')}}">
                            Servicios
                        </a>
                    </li>
                    <li @yield('inmuebles')>
                        <a href="{{route('web.inmuebles')}}">
                            Inmuebles
                        </a>
                    </li>
                    <li @yield('proyectos')>
                        <a href="{{route('web.proyectos')}}">
                            Proyectos
                        </a>
                    </li>
                    <li @yield('contactanos')>
                        <a href="{{route('web.contacto')}}">
                            Contactanos
                        </a>
                    </li>
                    <li @yield('login')>
                        <a href="/login">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	@yield('contenido')
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
	<script src="{{asset('js/jquery.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Script to Activate the Carousel -->
    <script src="{{asset('/js/accion.js')}}"></script>
    <!--Pace Js-->
    <script src="{{asset('/js/pace.min.js')}}"></script>
    <script src="{{ asset('js/jquery.number.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!--Start of Zopim Live Chat Script-->
    <script type="text/javascript">
        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
        $.src="//v2.zopim.com/?4Djsq2Tk2jJEaWXyD64Rb2X3xzaYu6KF";z.t=+new Date;$.
        type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
    <!--End of Zopim Live Chat Script-->
	@yield('js')
    
</body>
</html>