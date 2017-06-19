@extends('layouts.app')

@section('titulo', 'Cadastro de Atores - MyMovieList')

@section('content')
<div class="container  z-depth-5">
        <div class="container">
        <br>
        <h1 class="center">Cadastrar Atores</h1>
        <br>
        <div class="divider"></div>
        <br>
        <form method="post" action="{{ route('ators.store') }}">
                    {{csrf_field()}}
                    <div class="input-field">
                        
                        <input class="validate" type="text" name="nome" id="nome" value="" required autofocus>
                        <label for="nome">Nome do Ator</label>
                    </div>

                    <div class="input-field">
                        
                        <input class="validate" type="number" name="ano" id="ano" value="" required>
                        <label for="ano">Ano de Nascimento</label>
                    </div>

                
                    <div class="center">
                    <br>
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
</div>

@endsection