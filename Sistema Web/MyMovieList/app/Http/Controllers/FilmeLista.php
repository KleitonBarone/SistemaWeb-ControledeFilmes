<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lista;
use App\Filme;
use Illuminate\Support\Facades\DB;

class FilmeLista extends Controller
{
    public function addfilme(Request $request,Lista $lista){
      
        $filme = Filme::find($request->filmes);
        
        $lista->filme()->save($filme);
            return redirect()->route('listas.show', compact('lista'));
    }

    public function deletefilme(Lista $lista, Request $request){
       
        $filme = Filme::find($request->filme);
        
        $lista->filme()->detach($filme);
            return redirect()->route('listas.show', compact('lista'));
    }


}
