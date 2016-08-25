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

	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore iure aperiam asperiores, alias unde culpa, quisquam veritatis, magnam soluta labore dolor! Perspiciatis repellendus quia commodi, est, maiores corporis labore impedit.

	<script src="{{asset('full-slider/js/jquery.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('full-slider/js/bootstrap.min.js')}}"></script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
	@yield('js')
</body>
</html>