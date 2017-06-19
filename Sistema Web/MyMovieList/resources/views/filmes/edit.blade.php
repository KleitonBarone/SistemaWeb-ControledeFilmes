@extends('layouts.app')

@section('titulo', 'Editar Filme - MyMovieList')

@section('content')
<div class="container  z-depth-5">
        <div class="container">
        <br>
        <h1 class="center">Editar Filme</h1>
        <br>
        <div class="divider"></div>
        <br>
        <form action="{{ route('filmes.update', $filme->id) }}" method="post">
                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="put">

                   <div class="input-field">
                        <input id="titulo" class="validate" type="text" name="titulo" placeholder="Titulo"  value="{{$filme->titulo}}" required autofocus>
                        <label for="titulo">Titulo</label>
                    </div>
                   

                    <div class="input-field">
                        <input id="ano" class="validate" type="number" name="ano" placeholder="Ano" value="{{$filme->ano}}" required autofocus>
                        <label for="ano">Ano de Lançamento</label>
                    </div>


                    <div class="input-field">
                        <select name="genero" id="genero"  required>

                            
                            @foreach($generos as $genero)
                                <option value="{{$genero->id}}">{{$genero->nome}}</option>
                            @endforeach
                            
                        
                        </select>
                        <label for="genero">Gênero</label>
                    </div>

                    <div class="form-group">
                        <select name="ator" id="ator"  required>
                            
                            @foreach($ators as $ator)
                                <option value="{{$ator->id}}">{{$ator->nome}}</option>
                            @endforeach
                            
                        
                        </select>
                        <label for="ator">Ator</label>
                    </div>
                   
                   <br>
                    <div class="center">
                    <button type="submit" class="waves-effect waves-light blue btn">Editar</button>
                    </div>
                </form>

         </div>
         <br>
<br>
<br>
</div>
@endsection