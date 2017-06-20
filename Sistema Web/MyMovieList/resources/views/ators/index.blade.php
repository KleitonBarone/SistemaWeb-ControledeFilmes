@extends('layouts.app')

@section('titulo', 'Ators - MyMovieList')

@section('content')
<div class="container z-depth-5">
        <div class="container">
        <br>
        <h1 class="center">Atores</h1>
        <br>
        <a href="{{ route('ators.create') }}" class="waves-effect waves-light blue btn">Cadastar Novo Ator</a>
        <br>
        <br>
        <div class="divider"> </div>
        <br>
         @if ( count($ators) > 0 )
        <table class="highlight">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Ator</th>
                                    <th>Ano de Nascimento</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($ators as $ator)
                                <tr>
                                    <td>{{$ator->id}}</td>
                                    <td>{{$ator->nome}}</td>
                                    <td>{{$ator->ano}}</td>
                                    <td>
                <a class="btn btn-primary" href="/ators/{{$ator->id}}/edit">
                                    Editar
                                </a>

                <form style="display: inline;" action="{{route('ators.destroy', $ator->id)}}" method="post">

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
                                    <h5>Sem Resultados, Cadastre um Ator!</h5>
                                </div>
                                <br>
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