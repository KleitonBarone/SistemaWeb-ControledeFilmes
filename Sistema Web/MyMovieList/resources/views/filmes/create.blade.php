@extends('layouts.app')

@section('titulo', 'Cadastro de Filmes - MyMovieList')

@section('content')
<div class="container z-depth-5">
        <div class="container">
        <br>
        <h1 class="center">Cadastrar Filmes</h1>
        <br>
        <div class="divider"></div>
        <br>
        <form method="post" action="{{ route('filmes.store') }}">
                    {{csrf_field()}}
                    <div class="input-field">
                        <input id="titulo" class="validate" type="text" name="titulo"  required autofocus>
                        <label for="titulo">Título</label>
                    </div>
                   

                    <div class="input-field">
                        <input id="ano" class="validate" type="number" name="ano"  required>
                        <label for="ano">Ano de Lançamento</label>
                    </div>

                    @if( count($generos)<1 )
                    <br>
                    <h5 class="red-text">
                    Nenhum genero encontrado, Cadastre um Genero
                    <a href="{{ route('generos.create') }}">Aqui!</a>
                    </h5>
                    <br>
                    @else
                    <div class="input-field">
                        <select  name="genero" id="genero" required>
                        
                            
                            @foreach($generos as $genero)
                                <option value="{{$genero->id}}">{{$genero->nome}}</option>
                            @endforeach
                            
                        
                        </select>
                        <label for="genero">Gênero</label>
                    </div>
                    @endif

                    @if( count($ators)<1 )
                    <br>
                    <h5 class="red-text">
                    Nenhum Ator encontrado, Cadastre um Ator
                    <a href="{{ route('ators.create') }}">Aqui!</a>
                    </h5>
                    <br>
                    @else
                    <div class="input-field">
                        <select name="ator" id="ator" required>
                         

                            @foreach($ators as $ator)
                                <option value="{{$ator->id}}">{{$ator->nome}}</option>
                            @endforeach
                            
                        
                        </select>
                        <label for="ator">Ator</label> 
                    </div>
                    @endif
                    @if( ( count($ators) < 1 ) || ( count($generos) < 1 ) )
                    <div class="center">
                    <button class="btn disabled">Cadastrar</button>
                    </div>
                    @else
                    <div class="center">
                    <button class="waves-effect waves-light blue btn" type="submit">Cadastrar</button>
                    </div>
                    @endif
                </form>


</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
@endsection