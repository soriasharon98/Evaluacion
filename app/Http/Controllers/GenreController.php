<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
  public function mostrarGenres(){
  $genres = Genre::all();
  return view('genre', compact('genres'));
  }
}
