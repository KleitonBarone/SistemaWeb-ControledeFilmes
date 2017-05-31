@extends('layouts.app')

@section('titulo', 'Editar Genero - MyMovieList')

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
        <h1 class="center">Editar Genero</h1>
        <br />
        <hr>

<form action="{{ route('generos.update', $genero->id) }}" method="post">
                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="put">

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input id="nome" class="form-control" type="text" name="nome" value="{{$genero->nome}}">

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