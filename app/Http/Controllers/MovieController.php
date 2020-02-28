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

    public function editarMovies(){
      
    }
}
