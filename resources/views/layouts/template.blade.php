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
	@yield('estilos')
</head>

<body>
	@yield('contenido')

	<script src="{{asset('js/jquery.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Script to Activate the Carousel -->
    <script src="{{asset('/js/accion.js')}}"></script>
    <!--Pace Js-->
    <script src="{{asset('/js/pace.min.js')}}"></script>
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