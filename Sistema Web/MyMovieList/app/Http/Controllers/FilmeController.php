<?php

namespace App\Http\Controllers;

use App\Filme;
use App\Genero;
use App\Ator;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filmes = Filme::with(['genero', 'ator'])->get();
        return view('filmes.index', compact('filmes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos = Genero::all();
         $ators = Ator::all();
        return view('filmes.create', compact('generos', 'ators'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $filme = new Filme();

        $filme->titulo = $request->titulo;
        $filme->ano = $request->ano;
        $filme->genero_id = $request->genero;
         $filme->ator_id = $request->ator;

        $filme->save();
        
        return redirect('filmes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function show(Filme $filme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function edit(Filme $filme)
    {
         $generos = Genero::all();
         $ators = Ator::all();
        return view('filmes.edit', compact('filme', 'generos', 'ators'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filme $filme)
    {
       $filme->titulo = $request->titulo;
        $filme->ano = $request->ano;
        $filme->genero_id = $request->genero;
        $filme->ator_id = $request->ator;

        $filme->save();
        return redirect('/filmes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filme $filme)
    {
        $filme->delete();
        return redirect('/filmes');
    }
}
