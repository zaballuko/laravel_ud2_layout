<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>saludo</title>

    </head>
    <body>

    		<!-- Cuando la vista recibe los parametros desde la ruta a la variable color hay que añadirle #. Si la recibe por formulario ya viene incluida con lo que hay que hacer un apaño -->
    		@if ($color[0]=="#")
	          <p style="font-size: 75px;color:{{$color}}">Kaixo {{$nombre}}!!</p>
	        @else
	          <p style="font-size: 75px;color:#{{$color}}">Kaixo {{$nombre}}!!</p>
	        @endif

	        <!-- En una misma linea, evaluando una expresion -->
			<p style="font-size: 75px;color:<?php echo ($color[0]=="#")?"":"#";?>{{$color}}">Kaixo {{$nombre}}!!</p>

    </body>
</html>
