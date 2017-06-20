<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{

    protected $fillable = [
        'name',
    ];

    public function filme()
    {
        return $this->belongsToMany('App\Filme')
      ->withTimestamps();
    }

    public function user()
    {
        return $this->belongsToMany('App\User')
        ->withPivot('nota')
      ->withTimestamps();
    }
}
