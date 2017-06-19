<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{

    protected $fillable = [
        'titulo', 'ano',
    ];

   public function genero()
    {
        return $this->belongsTo('App\Genero');
    }

     public function ator()
    {
        return $this->belongsTo('App\Ator');
    }

    public function lista()
    {
        return $this->belongsToMany('App\Lista')
      ->withTimestamps();
    }
}
