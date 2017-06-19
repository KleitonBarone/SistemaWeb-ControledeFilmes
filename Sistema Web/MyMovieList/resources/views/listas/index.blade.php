@extends('layouts.app')

@section('titulo', 'Generos - MyMovieList')

@section('content')
<div class="container  z-depth-5">
        <div class="container">
        <br>
        <h1 class="center">Listas de Reprodução</h1>
        <br>
        <a href="{{ route('listas.create') }}" class="waves-effect waves-light blue btn">Criar Nova Lista</a>
        <br>
        <br>
        <div class="divider"> </div>
        @forelse ($listas as $lista)
        
        <table>
        <tr>
        <td>
        <form action="{{route('listas.show', $lista->id)}}" method="">
        {{csrf_field()}}
        <button class="waves-effect waves-light blue btn" type="submit">{{$lista->nome}}</button>
        </form>
        </td>

        <td>
                <a class="btn btn-primary" href="/listas/{{$lista->id}}/edit">
                        Editar
                </a>
        </td>

        <td>
                <form style="display: inline;" action="{{route('listas.destroy', $lista->id)}}" method="post">

                        {{csrf_field()}}

                        <input type="hidden" name="_method" value="delete">

                        <button class="btn red">Apagar Lista</button>

                </form>
        </td>
        </tr>
        </table>

        <div class="divider"></div>
                    
        @empty
        <div class="center">
        <br>
        <h5>Sem Resultados, Crie uma Lista!</h5>
        <br>
        </div>
        @endforelse
<br>
<br>
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