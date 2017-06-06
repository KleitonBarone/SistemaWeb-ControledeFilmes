@extends('layouts.app')

@section('titulo', 'Generos - MyMovieList')

@section('content')

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
                                    <th></th>
                                </tr>
                            </thead>
<!-- será adicionado mais tarde a pagina de cada genero, com filmes relacionados ao mesmo -->
                            <tbody>
                            @forelse ($generos as $genero)
                                <tr>
                                    <td>{{$genero->id}}</td>
                                    <td>{{$genero->nome}}</td>
                                    <td>
                <a class="btn btn-primary" href="/generos/{{$genero->id}}/edit">
                                    Editar
                                </a>

                <form style="display: inline;" action="{{route('generos.destroy', $genero->id)}}" method="post">

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