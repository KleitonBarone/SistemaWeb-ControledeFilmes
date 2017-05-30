<?php

namespace App\Http\Controllers;

use App\Ator;
use Illuminate\Http\Request;

class AtorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ators = Ator::all();
        return view('ators.index', compact('ators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('ators.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $ator = new Ator();

        $ator->nome = $request->nome;
        $ator->ano = $request->ano;
        $ator->save();
        
        return redirect('/ators');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ator  $ator
     * @return \Illuminate\Http\Response
     */
    public function show(Ator $ator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ator  $ator
     * @return \Illuminate\Http\Response
     */
    public function edit(Ator $ator)
    {
        return view('atores.edit', compact('ator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ator  $ator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ator $ator)
    {
        $ator->nome = $request->nome;
        $ator->ano = $request->ano;
        $ator->save();
        return redirect('/ators');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ator  $ator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ator $ator)
    {
        $ator->delete();
        return redirect('/ators');
    }
}
