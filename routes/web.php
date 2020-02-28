<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/movie', 'MovieController@mostrarMovies');

Route::get('/movie/{id}', 'MovieController@detalleMovies');

Route::post('/movie/{id}/editMovie', 'MovieController@editarMovies');

Route::get('/genre', 'GenreController@mostrarGenres');

Route::get('/actor', 'ActorController@mostrarActors');

Route::get('/actor/{id}', 'ActorController@detalleActors');

Route::get('/agregarActors', function(){
  return view('agregarActors');
});

Route::post('/agregarActors', 'ActorController@agregarActors');

Route::get('/movie/{id}/editarMovies', 'MovieController@selectEdit');

Route::post('/movie/{id}/editarMovies', 'MovieController@editarMovies');
