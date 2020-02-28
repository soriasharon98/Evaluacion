@extends('plantillas.app')

@section('contenido')
    <header>
      <h1>Pelicula Elegida</h1>
      <h2>{{$movieSelect->title}}</h2>
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

    </header>
@endsection
