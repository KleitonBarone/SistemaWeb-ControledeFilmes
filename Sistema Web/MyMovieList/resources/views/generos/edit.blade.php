@extends('layouts.app')

@section('titulo', 'Editar Genero - MyMovieList')

@section('content')
<div class="container z-depth-5">
        <div class="container">
        <br>
        <h1 class="center">Editar Genero</h1>
        <br>
        <div class="divider"></div>
        <br>
        <form action="{{ route('generos.update', $genero->id) }}" method="post">
                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="put">

                    <div class="input-field">
                        <input id="nome" class="form-control" type="text" name="nome" value="{{$genero->nome}}" required autofocus>
                        <label for="nome">Nome</label>
                    </div>

                   <br>
                   <br>
                    <div class="center">
                    <button type="submit" class="waves-effect waves-light blue btn">Editar</button>
                    </div>

                </form>

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
</div>
@endsection