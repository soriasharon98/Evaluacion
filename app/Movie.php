<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  public $guarded = [];

  public function actors(){
    return $this->belongsToMany(Actor::class, 'actor_movie', 'movie_id', 'actor_id');
  }

  public function genres(){
    return $this->belongsTo(Genre::class, 'genre_id');
  }
}
