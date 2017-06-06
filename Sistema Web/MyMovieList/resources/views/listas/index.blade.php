@extends('layouts.app')

@section('titulo', 'Generos - MyMovieList')

@section('content')

<br>
<br>
<br>
<br>
<div class="container grey lighten-4">
        <div class="container">
        <h1 class="center">Listas de Reprodução</h1>
        <br />
        <a href="{{ route('listas.create') }}" class="waves-effect waves-light blue btn">Criar Nova Lista</a>
        <hr>
      
        @forelse ($listas as $lista)
<form action="{{route('listas.show', $lista->id)}}" method="">
 {{csrf_field()}}
 <button class="waves-effect waves-light blue btn" type="submit">{{$lista->nome}}</button>
</form>
        <h5><a class="btn btn-primary" href="/listas/{{$lista->id}}/edit">
                                    Editar Nome
                                </a>
                                <form style="display: inline;" action="{{route('listas.destroy', $lista->id)}}" method="post">

                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="delete">

                    <button class="btn btn-danger">Apagar Lista</button>

                </form>
        </h5>

<hr>
                    
 @empty
<h3>Sem Resultados</h3>
 @endforelse

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