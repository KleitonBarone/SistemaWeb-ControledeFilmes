@extends('layouts.app')

@section('titulo', 'Cadastro de Generos - MyMovieList')

@section('content')

<br>
<br>
<br>
<br>
<div class="container grey lighten-4">
        <div class="container">
        <h1 class="center">Criar Lista</h1>
        <br />
        <hr>
        <form method="post" action="{{ route('listas.store') }}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="nome">Nome da Lista</label>
                        <input class="form-control" type="text" name="nome" id="nome" value="" required>
                    </div>
                        <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}" required>
                    <button class="waves-effect waves-light blue btn" type="submit">Criar</button>

                </form>


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