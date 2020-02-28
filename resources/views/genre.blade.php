@extends('plantillas.app')

@section('contenido')

  <body>
    <header>
      <h1>Lista de Generos !</h1>
      <ul>
        @if ($genres)
          @foreach($genres as $posicion => $genre)
          <li>{{$genre->name}}</li>
        @endforeach

        @endif
      </ul>
    </header>

@endsection
