@extends('layouts.app')

@section('titulo', 'Filmes - MyMovieList')

@section('content')
 
<br>
<br>
<br>
<br>
<div class="container grey lighten-4">
        <div class="container">
        <h1 class="center">Filmes</h1>
        <br />
        <a href="{{ route('filmes.create') }}" class="waves-effect waves-light blue btn">Cadastar Novo Filmes</a>
        <!-- mais tarde será adicionado a pagina de cada filme, com mais detalhes sobre o mesmo. -->
        <hr>
        <table>
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
                            @forelse ($filmes as $filme)
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