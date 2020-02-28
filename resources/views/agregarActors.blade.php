@extends('plantillas.app')

@section('contenido')

  <h2>Agregar Actor</h2>

  @if ($errors)
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>

      @endforeach
    </ul>

  @endif

  <form class="" action="/agregarActors" method="post">
    @csrf
    <div class="">
      <label for="">Nombre</label>
      <input type="text" name="first_name" value="">
    </div>

    <div class="">
      <label for="">Apellido</label>
      <input type="text" name="last_name" value="">
    </div>

    <div class="">
      <label for="">Rating</label>
      <input type="numeric" name="rating" value="">
    </div>
    <br>
    <button type="submit" name="button">Enviar Actor</button>
  </form>

@endsection
