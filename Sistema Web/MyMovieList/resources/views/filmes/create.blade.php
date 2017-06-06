@extends('layouts.app')

@section('titulo', 'Cadastro de Filmes - MyMovieList')

@section('content')
 
<br>
<br>
<br>
<br>
<div class="container grey lighten-4">
        <div class="container">
        <h1 class="center">Cadastrar Filmes</h1>
        <br />
        <hr>
        
        <form method="post" action="{{ route('filmes.store') }}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input id="titulo" class="form-control" type="text" name="titulo" placeholder="Titulo" required>

                    </div>
                   

                    <div class="form-group">
                        <label for="ano">Ano de Lançamento</label>
                        <input id="ano" class="form-control" type="number" name="ano" placeholder="Ano" required>

                    </div>


                    <div class="form-group">
                        <label for="genero">Gênero</label>
                        <select name="genero" id="genero" class="form-control" required>
                            
                            @foreach($generos as $genero)
                                <option value="{{$genero->id}}">{{$genero->nome}}</option>
                            @endforeach
                            
                        
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="ator">Ator</label>
                        <select name="ator" id="ator" class="form-control" required>
                            
                            @foreach($ators as $ator)
                                <option value="{{$ator->id}}">{{$ator->nome}}</option>
                            @endforeach
                            
                        
                        </select>
                    </div>

                    <button class="waves-effect waves-light blue btn" type="submit">Cadastrar</button>

                </form>


</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection