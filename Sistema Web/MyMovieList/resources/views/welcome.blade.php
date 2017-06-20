<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Inicio - MyMovieList</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="nav-wrapper white">
            <div class="row">
                <div class="col s3 offset-s1">
                    
                    <a href="/home" class="brand-logo blue-text">MyMovieList</a>
                </div>
                <ul id="nav-mobile" class="right">
                    <li><a href="/login" class="waves-effect waves-light blue btn">Login</a></li>
                    <li> <a href="/register" class="waves-effect waves-light blue btn">Cadastro</a></li>
                </ul>
            </div>
        </div>
    </nav>
    

        <nav>
            <div class="nav-wrapper blue darken-2">

                <ul id="nav-mobile" class="left">
                    <li><a href="{{ route('filmes.index') }}">Filmes</a></li>
                    <li><a href="{{ route('ators.index') }}">Atores</a></li>
                    <li><a href="{{ route('generos.index') }}">Generos</a></li>
                    <li><a href="{{ route('listas.index') }}">Listas de Reprodução</a></li>
                    
                </ul>
            </div>

        </nav>
    


    <div class="container  z-depth-5">
        <div class="container">
    <div class="row center">
        <div class="col s12">
            <h2>Sobre o Projeto</h2>
            <div class="divider"> </div>
        </div>
    </div>
<div class="row">
    <div class="col s12">

    <p>Esse Site está sendo desenvolvido como projeto de aprendizagem do framework laravel, sobre um sistema web de 
    pesquisa e criação de playlists de filmes para o usuario se interessar e ajudar a lembrar de filmes que lhe chamou a atenção.</p>
    <p>Os alunos responsáveis pelo site são:</p>
    <div class="row">
        <div class="col s6">
            <p><img src="grupo/Kleiton.jpg" alt="Kleiton Barone" class="circle responsive-img"></p>
            <h5>Kleiton Barone</h5>
            <p>Apesar de participar de todo o projeto esse integrante ficou responsável mais na area do PHP
            e Funcionalidades do Sistema Web</p>
        </div>
        <div class="col s6">
            <p><img src="grupo/Luan.jpg" alt="Kleiton Barone" class="circle responsive-img"></p>
            <h5>Luan Siqueira</h5>
            <p>Apesar de participar de todo o projeto esse integrante ficou responsável mais na area de Design
            e Aparencia do Sistema Web</p>
        </div>
    </div>
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
    <br>
    <br>
        <br>
    </div>



    <footer class="page-footer blue darken-2">
        <div class="footer-copyright blue darken-2">
            <div class="container">
                © 2017 MyMovieList. Todos os Direitos Reservados.
                <a class="grey-text text-lighten-4 right" href="/home">Início</a>
            </div>
        </div>
    </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
</body>

</html>