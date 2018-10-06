<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('public/favicon.ico')}}">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/dw.css')}}" rel="stylesheet">
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">DW32 - Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Barra de navegacion: Sustituir el nombre Grupo? por el tema que os ha sido asignado, activar el menu y modificar href-->
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="#">Grupo 1 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Grupo 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Grupo 3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Grupo 4</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Grupo 5</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>

    <!-- Begin page content: EL CONTENIDO DEL CONTENEDOR DEBERÁ SUSTITUIRSE POR VUESTRO TEMA -->
    <main role="main" class="container">
      <h1 class="mt-5">Tarea 2.6 (1ª parte)</h1>
      <p class="lead">Cada grupo deberá realizar un pequeño resumen sobre algunos conceptos de Laravel. Para ello tenéis que:
        <ul>
          <li>crear una vista siguiendo esta plantilla (hacer una copia cuyo nombre sera grupox.blade.php) y modificar:
            <ul>
              <li>el cuerpo de la página (este contenedor) con el tema a desarrollar.</li>
              <li>la barra de navegación (sustituir el nombre del grupo por el tema que os ha tocado,activar vuestro menú y modificar el enlace).</li>
            </ul>
          <li>generar la ruta correspondiente en el fichero de rutas (llamar a la vista directamente).</li>
        </ul>
        Atención!! Vamos a trabajar tod@s sobre el mismo repositorio github, en cada grupo habrá un colaborador que es el que se encargará de realizar las actualizaciones sobre el repositorio.
        De esta manera practicaremos sobre los conflictos que se pueden dar en los proyectos colaborativos y como resolverlos.
        Modificar sólo lo que ha sido solicitado.
        </p>
        <p><a href="https://github.com/ajuanena/laravel_ud2_layout.git">Descarga de proyecto</a></p>

      <p class="lead"><b>Temas a tratar</b></p>
      <p class="lead text-primary">Grupo 1. Laravel</p>
      <p>
        <ul>
          <li>¿Qué es Laravel?</li>
          <li>Generar nuevo proyecto</li>
          <li>Clave de encriptacion del proyecto</li>
          <li>.env</li>
          <li>Artisan</li>
          <li>Algunas opciones de artisan</li>
        </ul>
      </p>
      <p class="lead text-primary">Grupo 2. Rutas</p>
      <p>
        <ul>
          <li>Localizacion</li>
          <li>Rutas con funcion anónima</li>
          <li>Rutas con parámetros</li>
          <li>Rutas con filtros o restricciones de expresiones regulares en los parámetros</li>
          <li>utas con parámetros opcionales</li>
        </ul>
      </p>
      <p class="lead text-primary">Grupo 3. Controlador</p>
      <p>
        <ul>
          <li>Generar un controlador</li>
          <li>Namespace</li>
          <li>Métodos en el controlador</li>
          <li>Enlazar una ruta a un controlador</li>
          <li>Controlador de un solo método</li>
        </ul>
      </p>
      <p class="lead text-primary">Grupo 4. Vistas</p>
      <p>
        <ul>
          <li>Crear una vista</li>
          <li>Retornar una vista</li>
          <li>Pasar datos a la vista:</li>
          <li>- array asociativo</li>
          <li>- método with</li>
          <li>- funcion compact</li>
          <li>Escapar código HTML</li>
        </ul>
      </p>
      <p class="lead text-primary">Grupo 5. Blade</p>
      <p>
        <ul>
          <li>¿Qué es Blade?</li>
          <li>Imprimir variables</li>
          <li>Ciclos y estructuras: if, for, foreach, unless, empty</li>
          <li>Vistas en caché</li>
          <li>Token (CSRF)</li>
        </ul>
      </p>

    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Footer DW32 ©2018-2019</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
