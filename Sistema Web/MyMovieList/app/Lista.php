<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    public function filme()
    {
        return $this->belongsToMany('App\Filme');
    }
}
