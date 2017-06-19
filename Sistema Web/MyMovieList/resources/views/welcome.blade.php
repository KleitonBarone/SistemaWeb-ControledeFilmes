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
                    
                    <a href="/home" class="brand-logo"><img src="MyMovieList.png" alt="Logo-MyMovieList" width="200" height="50"></a>
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
                    <li><a href="{{ route('listas.index') }}">Listas de Rerodução</a></li>
                    <li><a href="/sobre">Sobre</a></li>
                </ul>
            </div>

        </nav>
    


    <div class="container  z-depth-5">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h5>Sugestão de Filmes</h5>
                    <div class="divider"> </div>
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
                    <div class="divider"> </div>
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
                    <div class="divider"> </div>
                </div>
            </div>
            <div class="row">
                <div class="col l6 s12 center">
                    <video width="320" height="240" controls>
                        <source src="http://br.vid.web.acsta.net/uk/medias//nmedia/55/16/12/06/11/19552975_l_013.mp4" type="video/mp4"> Seu browser não suporta a tag video.
                    </video>
                    <a src="#">
                        <p class="center">Transformers</p>
                    </a>
                </div>
                <div class="col l6 s12 center">
                    <video width="320" height="240" controls>
                        <source src="http://br.vid.web.acsta.net/uk/medias//nmedia/55/16/12/09/08/19553031_l_013.mp4" type="video/mp4"> Seu browser não suporta a tag video.
                    </video>
                    <a src="#">
                        <p class="center">Homem Aranha</p>
                    </a>
                </div>

            </div>
        </div>

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