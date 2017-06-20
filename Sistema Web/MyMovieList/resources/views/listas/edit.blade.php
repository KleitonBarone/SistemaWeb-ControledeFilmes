@extends('layouts.app')

@section('titulo', 'Editar Listas - MyMovieList')

@section('content')
<div class="container z-depth-5">
        <div class="container">
        <br>
        <h1 class="center">Editar Lista de Reprodução</h1>
        <br>
        <div class="divider"></div>
        <br>
        <form action="{{ route('listas.update', $lista->id) }}" method="post">
                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="put">

                    <div class="input-field">
                        <input id="nome" class="form-control" type="text" name="nome" value="{{$lista->nome}}" required autofocus>
                        <label for="nome">Nome</label>
                    </div>

                   <br>
                    <div class="center">
                    <br>  
                    <button class="waves-effect waves-light blue btn" type="submit">Editar</button>
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