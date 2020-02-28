<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PeliculasDemise</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body>
    <header>
      <h1>PeliculasDemise</h1>
      <nav>
        <ul>
          <li><a href="/movie">Peliculas</a></li>
          <li><a href="/actor">Actores</a></li>
          <li><a href="/genre">Generos</a></li>
        </ul>
      </nav>
    </header>


    @yield('contenido')


    <footer>

      Todos los derechos reservados

    </footer>

    <script src="js/jquery.js" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>
