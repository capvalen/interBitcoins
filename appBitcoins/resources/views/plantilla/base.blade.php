<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('titulo') - Bitcoin en línea</title>
	@yield('css')
</head>
<body>
	@include('plantilla.cabecera')
	@yield("contenido")

</body>
</html>