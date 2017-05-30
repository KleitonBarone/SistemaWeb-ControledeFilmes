@extends('layouts.app')

@section('titulo', 'Editar Filme - MyMovieList')

@section('content')
 <div class="container">

        <nav>
            <div class="nav-wrapper blue darken-2">

                <ul id="nav-mobile" class="left">
                   <li><a href="{{ route('filmes.index') }}">Filmes</a></li>
                    <li><a href="{{ route('ators.index') }}">Atores</a></li>
                    <li><a href="{{ route('generos.index') }}">Generos</a></li>
                    <li><a href="/sobre">Sobre</a></li>
                </ul>
            </div>
            
        </nav>
</div>
<br>
<br>
<br>
<br>

<div class="container grey lighten-4">
        <div class="container">
        <h1 class="center">Editar Filme</h1>
        <br />
        <hr>

<form action="{{ route('filmes.update', $filme->id) }}" method="post">
                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="put">

                   <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input id="titulo" class="form-control" type="text" name="titulo" placeholder="Titulo"  value="{{$filme->Titulo}}" required>

                    </div>
                   

                    <div class="form-group">
                        <label for="ano">Ano de Lançamento</label>
                        <input id="ano" class="form-control" type="text" name="ano" placeholder="Ano" value="{{$filme->Ano}}" required>

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
                   
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

         </div>
         <br>
<br>
<br>
<br>
    </div>
    <br>
<br>
<br>
<br>
@endsection