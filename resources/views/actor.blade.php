@extends('plantillas.app')

@section('contenido')

  <body>
    <header>
      <h1>Lista de Actores !</h1>
      <ul>
        @if ($actors)
          @foreach($actors as $posicion => $actor)
          <li><a href="/actor/{{$actor->id}}">{{$actor->getNombreCompleto()}}</a></li>
        @endforeach

        @endif
      </ul>
    </header>

@endsection
