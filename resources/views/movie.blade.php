@extends('plantillas.app')

@section('contenido')

  <body>
    <header>
      <h1>Lista de Peliculas !</h1>
      <ul>
        @if ($movies)
          @foreach($movies as $posicion => $movie)
          <li><a href="/movie/{{$movie->id}}">{{$movie->title}}</a></li>
        @endforeach

        @endif
      </ul>
    </header>

@endsection
