@extends('layouts.app')

@section('titulo', 'Editar Ator - MyMovieList')

@section('content')
<div class="container z-depth-5">
        <div class="container">
        <br>
        <h1 class="center">Editar Ator</h1>
        <br>
        <div class="divider"></div>
        <br>
        <form action="{{ route('ators.update', $ator->id) }}" method="post">
                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="put">

                    <div class="input-field">
                        <input id="nome" class="validate" type="text" name="nome" value="{{$ator->nome}}" required autofocus>
                        <label for="nome">Nome</label>
                    </div>

                    <div class="input-field">
                        <input id="ano" class="validate" type="number" name="ano" value="{{$ator->ano}}" required>
                        <label for="ano">Ano de Nascimento</label>
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
</div>
@endsection