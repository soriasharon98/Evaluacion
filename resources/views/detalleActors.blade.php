@extends('plantillas.app')

@section('contenido')
    <header>
      <h1>Actor Elegido</h1>
      <h2>{{$actorSelect->getNombreCompleto()}}</h2>
      <h3>Rating: {{$actorSelect->rating}}</h3>
      <h3>Filmografia:</h3>
      @foreach ($actorSelect->movies as $movie)
        {{$movie->title}}
      @endforeach
      
    </header>
@endsection
