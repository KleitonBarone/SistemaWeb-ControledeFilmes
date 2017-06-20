@extends('layouts.app')

@section('titulo', 'Cadastro de Listas - MyMovieList')

@section('content')
<div class="container z-depth-5">
        <div class="container">
        <br>
        <h1 class="center">Criar Nova Lista de Reprodução</h1>
        <br>
        <div class="divider"></div>
        <br>
        <form method="post" action="{{ route('listas.store') }}">
                    {{csrf_field()}}

                    <div class="input-field">
                        <input class="validate" type="text" name="nome" id="nome" value="" required autofocus>
                        <label for="nome">Nome da Lista</label>
                    </div>

                    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}" required>

                    <div class="center">
                    <br>  
                    <button class="waves-effect waves-light blue btn" type="submit">Criar</button>
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
</div>
@endsection