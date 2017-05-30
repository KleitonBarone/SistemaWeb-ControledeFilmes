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
    

    <div class="container grey lighten-4">
        <div class="container">
    <div class="row">
        <div class="col s12">
            <h5>Sugestão de Filmes</h5>
            <hr>
        </div>
    </div>
<!-- SERÁ ADICIONADO UM SISTEMA DINAMICO MAIS TARDE NO PROJETO -->
    <div class="row">
            <div class="col l4 s12 center">
                   <a src="#">
                    <img src="/imagens/alien.jpg" alt="#" width="200" height="250">
                    <p class="">Alien</p>
                   </a>
            </div>
                    <div class="col l4 s12 center">
                <a src="#">
                    <img src="/imagens/a-orfa.jpg" alt="#" width="200" height="250">
                    <p class="">A Orfa</p>
                </a>
            </div>
                    <div class="col l4 s12 center">
                <a src="#">
                    <img src="/imagens/avatar.jpg" alt="#" width="200" height="250">
                    <p class="">Avatar</p>
                </a>
            </div>
    </div>
    <!-- SERÁ ADICIONADO UM SISTEMA DINAMICO MAIS TARDE NO PROJETO -->
    <div class="row">
        <div class="col s12">
            <h5>Filmes Lançados Recentemente</h5>
            <hr>
        </div>
    </div>
    <div class="row">
            <div class="col l4 s12 center">
                <a src="#">
                    <img src="/imagens/ironman3.jpg" alt="#" width="200" height="250">
                
                <p class="center">Homem de Ferro 3</p>
                </a>
            </div>
                    <div class="col l4 s12 center">
                <a src="#">
                    <img src="/imagens/hobbit.jpg" alt="#" width="200" height="250">
                    <p class="center">Hobbit</p>
                </a>
            </div>
                    <div class="col l4 s12 center">
                <a src="#">
                    <img src="/imagens/senhordosaneis.jpg" alt="#" width="200" height="250">
                    <p class="center">Senhor dos Aneis</p>
                </a>
            </div>
    </div>
    <!-- SERÁ ADICIONADO UM SISTEMA DINAMICO MAIS TARDE NO PROJETO -->
    <div class="row">
        <div class="col s12">
            <h5>Trailer de Novos Filmes</h5>
            <hr>
        </div>
    </div>
    <div class="row">
            <div class="col l6 s12 center">
                <video width="320" height="240" controls>
                    <source src="http://br.vid.web.acsta.net/uk/medias//nmedia/55/16/12/06/11/19552975_l_013.mp4" type="video/mp4">
                    Seu browser não suporta a tag video.
                </video>
                 <a src="#">
                     <p class="center">Transformers</p>
                 </a>
            </div>
                    <div class="col l6 s12 center">
                <video width="320" height="240" controls>
                    <source src="http://br.vid.web.acsta.net/uk/medias//nmedia/55/16/12/09/08/19553031_l_013.mp4" type="video/mp4">
                    Seu browser não suporta a tag video.
                </video>
                <a src="#">
                     <p class="center">Homem Aranha</p>
                 </a>
            </div>
                   
    </div>
</div>
    </div>
@endsection
