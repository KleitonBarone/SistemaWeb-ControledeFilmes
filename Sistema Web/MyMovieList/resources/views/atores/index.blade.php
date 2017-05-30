@extends('layouts.app')

@section('titulo', 'Generos - MyMovieList')

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
        <h1 class="center">Atores</h1>
        <br />
        <a href="{{ route('ators.create') }}" class="waves-effect waves-light blue btn">Cadastar Novo Ator</a>
        <hr>
        <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Ator</th>
                                    <th>Ano de Nascimento</th>
                                    <th></th>
                                </tr>
                            </thead>
<!-- será adicionado mais tarde a pagina de cada filme, com filmes relacionados ao mesmo -->
                            <tbody>
                            @forelse ($ators as $ator)
                                <tr>
                                    <td>{{$ator->id}}</td>
                                    <td>{{$ator->nome}}</td>
                                    <td>{{$ator->ano}}</td>
                                    <td>
                <a class="btn btn-primary" href="/atores/{{$ator->id}}/edit">
                                    Editar
                                </a>

                <form style="display: inline;" action="{{route('atores.destroy', $ator->id)}}" method="post">

                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="delete">

                    <button class="btn btn-danger">Apagar</button>

                </form>

            </td>
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