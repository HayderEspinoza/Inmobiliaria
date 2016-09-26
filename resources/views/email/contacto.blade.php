<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conatcto</title>
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
		<strong>Mensaje:</strong> {{ $datos['mensaje'] }}
	</p>
	<p>
		<strong>Interesado en:</strong>
	</p>
	<ul>
		@if (isset($datos['tipo']))
			@foreach ($datos['tipo'] as $element)
				<li>{{ $element }}</li>
			@endforeach
		@endif
	</ul>
</body>
</html>