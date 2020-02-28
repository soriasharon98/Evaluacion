<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
  public function mostrarActors(){
  $actors = Actor::all();
  return view('actor', compact('actors'));
  }

  public function detalleActors($id){
  $actorSelect = Actor::find($id);
  return view('detalleActors', compact('actorSelect'));
}

public function agregarActors(Request $datos){
  $validacion = [
    "first_name" =>"required|min:2",
    "last_name" =>"required|min:2",
    "rating" =>"required|numeric",
  ];

  $mensajes = [
    "required" => "El campo :attribute es obligatorio",
    "min" => "El nombre debe tener 2 caracteres minimo",
    "numeric" => "El campo :attribute debe ser numerico"
  ];

  $this->validate($datos, $validacion, $mensajes);

  $actorNuevo =new Actor;
  $actorNuevo->first_name = $datos['first_name'];
  $actorNuevo->last_name = $datos['last_name'];
  $actorNuevo->rating = $datos['rating'];

  $actorNuevo->save();

  return redirect('/actor');
}

}
