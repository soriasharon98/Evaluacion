@extends('plantillas.app')

@section('contenido')
  <h2>Editar {{$selectEdit->title}}</h2>

  @if ($errors)
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>

      @endforeach
    </ul>

  @endif

  <form class="" action="/movie/{{$selectEdit->id}}/editarMovies" method="post">
    @csrf
    <div class="">
      <label for="">Titulo</label>
      <input type="text" name="title" value="">
    </div>

    <div class="">
      <label for="">Rating</label>
      <input type="number" name="rating" value="">
    </div>

    <div class="">
      <label for="">Premios</label>
      <input type="number" name="awards" value="">
    </div>

    <div class="">
      <label for="">Fecha de estreno</label>
      <input type="date" name="release_date" value="">
    </div>

    <div class="">
      <label for="">Duración</label>
      <input type="number" name="length" value="">
    </div>

    <div class="">
      <label for="">Genero</label>
      <input type="number" name="genre_id" value="">
    </div>
    <br>
    <button type="submit" name="button">Finalizar edición</button>
  </form>

@endsection
