<!doctype html>
<html>
	<head>
		<title>
			Unidad 2
		</title>
	</head>
	<body>
		<h4>TAREA 2.5 Formulario usando en la misma vista</h4>
		<form action="multi" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
			Nombre:<br>
			<input type="text" name="Nombre" value="Arantxa"><br><br>
			<button type="submit" name="submit">Enviar</button>
		</form>
		<br>

		@if (isset($nombre) )
    		<h4>KAIXO {{$nombre}}!</h4>
    		<h4>Hola {{$nombre}}!</h4>
    		<h4>Salut {{$nombre}}!</h4>
    		<h4>Hello {{$nombre}}!</h4>
    		<h4>Hej {{$nombre}}</!h4>
    		<h4>Hallo {{$nombre}}!</h4>
    		<h4>Dobrý deň {{$nombre}}!</h4>
		@endif

		<br>

	</body>
</html>
