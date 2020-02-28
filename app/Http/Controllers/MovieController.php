<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function mostrarMovies(){
    $movies = Movie::all();
    return view('movie', compact('movies'));
    }

    public function detalleMovies($id){
    $movieSelect = Movie::find($id);
    return view('detalleMovies', compact('movieSelect'));
}

    public function selectEdit($id){
    $selectEdit = Movie::find($id);
    return view('editarMovies', compact('selectEdit'));

}
    public function editarMovies(Request $datos){
      $editarMovies = Movie::find($datos->id);

      $editarMovies->title = $datos['title'];
      $editarMovies->rating = $datos['rating'];
      $editarMovies->awards = $datos['awards'];
      $editarMovies->length = $datos['length'];
      $editarMovies->release_date = $datos['release_date'];
      $editarMovies->genre_id = $datos['genre_id'];

      $editarMovies-> save();

      return redirect('/movie');
    }
}
