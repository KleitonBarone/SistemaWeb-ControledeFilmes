<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Lista;
use App\User;
class UserLista extends Controller
{
   public function showavalia(Lista $lista){
        
        $users = User::all();

        return view('avalia.show', compact('users', 'lista'));
    } 

    public function addavalia(Request $request,Lista $lista){

        $id_user = Auth::id();

        $lista->user()->attach($id_user, ['nota' => $request->nota]);
        
            return redirect()->route('avalia.show', compact('lista'));
    }


    public function mudaavalia(Lista $lista, Request $request){
        $id_user = Auth::id();
        
        $lista->user()->detach($id_user);

        $lista->user()->attach($id_user, ['nota' => $request->nota]);

            return redirect()->route('avalia.show', compact('lista'));
    }


}
