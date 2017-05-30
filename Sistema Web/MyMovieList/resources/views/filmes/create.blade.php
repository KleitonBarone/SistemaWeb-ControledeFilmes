@extends('layouts.app')

@section('titulo', 'Cadastro de Filmes - MyMovieList')

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
        <h1 class="center">Cadastrar Filmes</h1>
        <br />
        <hr>
        <!-- mais tarde vai poder ser selecionado mais de um genero -->
        <form method="post" action="{{ route('filmes.store') }}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input id="titulo" class="form-control" type="text" name="titulo" placeholder="Titulo" required>

                    </div>
                   

                    <div class="form-group">
                        <label for="ano">Ano de Lançamento</label>
                        <input id="ano" class="form-control" type="text" name="ano" placeholder="Ano" required>

                    </div>


                    <div class="form-group">
                        <label for="genero">Gênero</label>
                        <select name="genero" id="genero" class="form-control" required>
                            
                            @foreach($generos as $genero)
                                <option value="{{$genero->id}}">{{$genero->nome}}</option>
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