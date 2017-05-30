@extends('layouts.app')

@section('titulo'. 'Inicio - MyMovieList')

@section('content')
    <div class="container">

        <nav>
            <div class="nav-wrapper blue darken-2">

                <ul id="nav-mobile" class="left">
                    <li><a href="{{ route('filmes.index') }}">Filmes</a></li>
                    <li><a href="#">Atores</a></li>
                    <li><a href="{{ route('generos.index') }}">Generos</a></li>
                    <li><a href="/sobre">Sobre</a></li>
                </ul>
            </div>
            
        </nav>
</div>
    
<br>
<br>
<br>
<br>
    <div class="container grey lighten-4">
        <div class="container">
    <div class="row center">
        <div class="col s12">
            <h2>Sobre o Projeto</h2>
            <hr>
        </div>
    </div>
<div class="row">
    <div class="col s12">

    <p>Esse Site está sendo desenvolvido como projeto de aprendizagem do framework laravel, sobre um sistema web de 
    pesquisa e criação de playlists de filmes para o usuario se interessar e ajudar a lembrar de filmes que lhe chamou a atenção.</p>
    <p>Os alunos responsáveis pelo site são:</p>
    <ul>
        <li>Kleiton Barone Semolini</li>
        <li>Luan Matheus Siqueira</li>
    <ul>
        <br>
    <p>Da sala 3°Emia de 2017.</p>

        </div>
    </div>
    <br>
    <br>
    <br>
    </div>
    <br>
    <br>
    </div>
    <br>
   @endsection

