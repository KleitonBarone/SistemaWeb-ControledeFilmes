<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    public function filmes()
    {
        return $this->hasMany('App\Filme');
    }
}
