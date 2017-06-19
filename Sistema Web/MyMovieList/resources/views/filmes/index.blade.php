@extends('layouts.app')

@section('titulo', 'Filmes - MyMovieList')

@section('content')
<div class="container z-depth-5">
        <div class="container">
        <br>
        <h1 class="center">Filmes</h1>
        <br>
        <a href="{{ route('filmes.create') }}" class="waves-effect waves-light blue btn">Cadastar Novo Filme</a>
        <br>
        <br>
        <br>
        <div class="divider"> </div>
        @if ( count($filmes) > 0 )
        <table class="highlight">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Titulo</th>
                                    <th>Ano</th>
                                    <th>Genero</th>
                                    <th>Ator</th>
                                    <th></th>
                                </tr>
                            </thead> 
                            <tbody>
                                @foreach ($filmes as $filme)
                                <tr>
                                    <td>{{$filme->id}}</td>
                                    <td>{{$filme->titulo}}</td>
                                    <td>{{$filme->ano}}</td>
                                    <td>{{$filme->genero->nome}}</td>
                                    <td>{{$filme->ator->nome}}</td>
                                    <td>
                <a class="btn btn-primary" href="/filmes/{{$filme->id}}/edit">
                                    Editar
                                </a>

                <form style="display: inline;" action="{{route('filmes.destroy', $filme->id)}}" method="post">

                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="delete">

                    <button class="btn red">Apagar</button>

                </form>

            </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                       @else
                        <br>
                            <div class="center">
                                
                            <h5>Sem resultados, Cadastre um Filme!</h5>
                            </div>
                            <br>
                        @endif
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

</div>
</div>

@endsection