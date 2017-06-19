@extends('layouts.app')

@section('titulo', 'Generos - MyMovieList')

@section('content')
<div class="container z-depth-5">
        <div class="container">
        <br>
        <h1 class="center">Generos</h1>
        <br>
        <a href="{{ route('generos.create') }}" class="waves-effect waves-light blue btn">Cadastar Novo Genero</a>
        <br>
        <br>
        <div class="divider"> </div>
        @if ( count($generos) > 0 )
        <table class="highlight">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Genero</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($generos as $genero)
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
                                <br>
                                <h5>Sem resultados, Cadastre um Genero!<h5>
                                <br>
                                </div>
                        @endif

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
</div>
@endsection