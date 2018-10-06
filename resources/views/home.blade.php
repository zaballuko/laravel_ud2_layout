<!doctype html>
<html>
	<head>
		<title>
			Unidad 2
		</title>
	</head>
	<body>
		<h3>Unidad Didáctica 2. Logica de negocio de una app web</h3>

		<h4>TAREA 2.1 Enlace</h4>
		<p><a href="contacto">Haz click aquí para acceder al contacto</a></p>
		<p><a href="foro">Haz click aquí para acceder al foro</a></p>
		<p><a href="blog/34">Haz click aquí para acceder al blog. Un parametro</a></p>
		<p><a href="blog/34/arantxa">Haz click aquí para acceder al blog. Dos parametros</a></p>
		<br>

		<h4>TAREA 2.2 Vista Controlador</h4>
		<p><a href="saludo">Saludo</a></p>
		<p><a href="saludo/arantxa">Saludo personalizado</a></p>
		<p><a href="saludo/arantxa/D55">Saludo personalizado con color</a></p>
		<br>

		<h4>TAREA 2.4 Formulario (get)</h4>
		<form action="contacto/contactForm_get" method="get">
			<input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
			Nombre:<br>
			<input type="text" name="Nombre" value="Arantxa"><br><br>
			Primer apellido:<br>
			<input type="text" name="Apellido" value="Juanena"><br><br>
			<button type="submit">Enviar</button>
		</form>
		<br>

		<h4>TAREA 2.5 Formulario (post)</h4>
		<form action="contacto/contactForm_post" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			Nombre:<br>
			<input type="text" name="Nombre" value="Arantxa"><br><br>
			Primer apellido:<br>
			<input type="text" name="Apellido" value="Juanena"><br><br>
			<button type="submit">Enviar</button>
		</form>
		<br>

		<h4>TAREA 2.5 Formulario (post) con datos</h4>
		<form action="contacto/contactForm" method="post">
			@csrf
			Nombre:<br>
			<input type="text" name="Nombre" value="Arantxa"><br><br>
			Primer apellido:<br>
			<input type="text" name="Apellido" value="Juanena"><br><br>
			<button type="submit">Enviar</button>
		</form>
		<br>

		<h4>TAREA 2.5 Formulario (post) con datos,  mostrar en vista</h4>
		<form action="contacto/contactFormVista" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			Nombre:<br>
			<input type="text" name="Nombre" value="Arantxa"><br><br>
			Primer apellido:<br>
			<input type="text" name="Apellido" value="Juanena"><br><br>
			<input type="color" name="Color"><br><br>
			<button type="submit">Enviar</button>
		</form>
		<br>

		<h4>TAREA 2.5 Formulario usando en la misma vista</h4>
		<p><a href="multi">Saludo en diferentes idiomas</a></p>
		<br>
		<h4>TAREA 2.6 Layouts</h4>
		<p><a href="resumen">Introduccion a Blade</a></p>
		<br>
	</body>
</html>
