@extends('layouts.app')

@section('titulo', 'Generos - MyMovieList')

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
        <h1 class="center">Generos</h1>
        <br />
        <a href="{{ route('generos.create') }}" class="waves-effect waves-light blue btn">Cadastar Novo Genero</a>
        <hr>
        <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Genero</th>
                                </tr>
                            </thead>
<!-- será adicionado mais tarde a pagina de cada genero, com filmes relacionados ao mesmo -->
                            <tbody>
                            @forelse ($generos as $genero)
                                <tr>
                                    <td>{{$genero->id}}</td>
                                    <td>{{$genero->nome}}</td>
                                </tr>
                             @empty
                                <tr><td>Sem resultados</td></tr>
                             @endforelse
                                
                            </tbody>
                        </table>

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