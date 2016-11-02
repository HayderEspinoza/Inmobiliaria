<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inmueble</title>
</head>
<body>
	<p>
		<strong>Nombre:</strong> {{ $datos['nombre'] }}
	</p>
	<p>
		<strong>Email:</strong> {{ $datos['email'] }}
	</p>
	<p>
		<strong>Telefono:</strong> {{ $datos['telefono'] }}
	</p>
	<p>
		<strong>Mensaje:</strong> {{ $datos['asunto'] }}
	</p>
	<p>
		<strong>Interesado en el siguiente Inmueble:</strong>
		<a href="{{ route('web.inmueble', $datos['inmueble']) }}" class="">
			Ver
		</a>
	</p>
	
</body>
</html>