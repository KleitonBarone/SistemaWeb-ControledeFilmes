@extends('layouts.app')

@section('titulo', 'Cadastro de Generos - MyMovieList')

@section('content')
 <div class="container">

        <nav>
            <div class="nav-wrapper blue darken-2">

                <ul id="nav-mobile" class="left">
                   <li><a href="{{ route('filmes.index') }}">Filmes</a></li>
                    <li><a href="#">Atores</a></li>
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
        <h1 class="center">Cadastrar Generos</h1>
        <br />
        <hr>
        <form method="post" action="{{ route('generos.store') }}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="nome">Nome do Genero</label>
                        <input class="form-control" type="text" name="nome" id="nome" value="" required>
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