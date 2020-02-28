<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
  public $guarded = [];

  public function Movies(){
    return $this-> hasMany(Movie::class, 'genre_id');
  }
}
