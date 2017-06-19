@extends('layouts.app')

@section('titulo', 'Cadastro de Generos - MyMovieList')

@section('content')
<div class="container  z-depth-5">
        <div class="container">
        <br>
        <h1 class="center">Cadastrar Generos</h1>
        <br>
        <div class="divider"></div>
        <br>
        <form method="post" action="{{ route('generos.store') }}">
                    {{csrf_field()}}
                    <div class="input-field">
                        <input class="validate" type="text" name="nome" id="nome" required autofocus>
                        <label for="nome">Nome do Genero</label>
                    </div>
                    <br>
                    <div class="center">
                    <button class="waves-effect waves-light blue btn" type="submit">Cadastrar</button>
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
<br>
</div>
@endsection