@extends('plantillas.app')

@section('contenido')


    <header>
      <h1>Pelicula Elegida</h1>
      <h2>{{$movieSelect->title}}</h2>
      @if ($movieSelect->genres)
        <h3>Genero: {{$movieSelect->genres->name}}</h3>
      @else
        <h3>Genero: No registrado</h3>
      @endif
      <h3>Rating: {{$movieSelect->rating}}</h3>
      <ul>
        <li>Premios: {{$movieSelect->awards}}</li><br>
        <li>Fecha de Estreno: {{$movieSelect->release_date}}</li>
        <h3>Reparto:</h2>
      </ul>
        @foreach ($movieSelect->actors as $actor)
          <ul>
        <li>{{$actor -> getNombreCompleto()}}</li>
      </ul>

        @endforeach

        <h3><a href="/movie/{{$movieSelect->id}}/editarMovies">Editar Pelicula</a></h3></a>
    </header>
@endsection
