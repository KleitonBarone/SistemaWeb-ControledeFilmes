<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{
    public function filmes()
    {
        return $this->hasMany('App\Filme');
    }
}
