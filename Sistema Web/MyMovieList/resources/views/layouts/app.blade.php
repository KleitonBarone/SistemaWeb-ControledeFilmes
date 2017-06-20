<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo')</title>

    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
   
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<nav>
   <div class="nav-wrapper white">
   <div class="row">
         <div class="col s3 offset-s1">
            <a href="/home" class="brand-logo blue-text">MyMovieList</a>
         </div>
      <ul id="nav-mobile" class="right">

@if (Auth::guest())
        <li><a href="{{ route('login') }}" class="waves-effect waves-light blue btn">Login</a></li>
        <li> <a href="{{ route('register') }}" class="waves-effect waves-light blue btn">Cadastro</a></li>
@else
<li>

<a class='dropdown-button btn blue' href='#' data-activates='dropdown1'>{{ Auth::user()->name }}</a>

 
  <ul id='dropdown1' class='dropdown-content'>
    <li><a class="blue-text" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
  </ul>


 </li>
@endif

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

                    

        @yield('content')
   

   <footer class="page-footer blue darken-2">
          <div class="footer-copyright blue darken-2">
            <div class="container">
            © 2017 MyMovieList.  Todos os Direitos Reservados.
            <a class="grey-text text-lighten-4 right" href="/home">Início</a>
            </div>
          </div>
    </footer>

  
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
    $('select').material_select();
        });
    </script>
</body>
</html>
