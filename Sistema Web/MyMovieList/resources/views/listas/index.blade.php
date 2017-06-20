@extends('layouts.app')

@section('titulo', 'Listas - MyMovieList')

@section('content')
<div class="container  z-depth-5">
        <div class="container">
        <br>
        <h1 class="center">Listas de Reprodução</h1>
        <br>
        <div class="row">
        <a href="{{ route('listas.create') }}" class="waves-effect waves-light blue btn col s3">Criar Nova Lista</a>
        </div>
        <br>
        <br>
        <br>
        <form style="display: inline;" action="{{route('listas.procuralista')}}" method="get">
         {{csrf_field()}}
         Pesquise Lista por Criador:
        <div class="input-field inline">
                        <select name="user" id="user" required>
                         

                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                            
                        
                        </select>
                        <label for="ator">Usuario</label> 

                    </div>
                    <button class="waves-effect waves-light lime btn" type="submit">Pesquisar</button>
                
                </form>
        
        
        
        <div class="divider"> </div>
        @forelse ($listas as $lista)
        
        <table>
        <tr>
        <td>
        <?php
          foreach ($users as $user){
            if($user->id == $lista->user_id){
                $criador = $user->name;
                break;
            };
          };
        ?>
        <p>Criado por: <strong>{{$criador}}</strong></p>
        </td>
        <td>
        Nome da Lista: <strong>{{$lista->nome}}</strong>
        </td>
        <td>
        <form action="{{route('listas.show', $lista->id)}}" method="">
        {{csrf_field()}}
        <button class="waves-effect waves-light blue btn" type="submit">Visualizar</button>
        </form>
        </td>

        <td>
                <form action="{{route('avalia.show', $lista->id)}}" method="get">
                {{csrf_field()}}
                <button class="waves-effect waves-light green lighten-1 btn" type="submit">Avaliar Lista</button>
                </form>
        </td>

        <td>
                <a class="btn btn-primary" href="/listas/{{$lista->id}}/edit">
                        Editar
                </a>
        </td>



        <td>
                <form style="display: inline;" action="{{route('listas.destroy', $lista->id)}}" method="post">

                        {{csrf_field()}}

                        <input type="hidden" name="_method" value="delete">

                        <button class="btn red">Apagar Lista</button>
        </td>

                </form>
        
        </tr>
        </table>

        <div class="divider"></div>
                    
        @empty
        <div class="center">
        <br>
        <h5>Sem Resultados!</h5>
        <br>
        </div>
        @endforelse
<br>
<br>
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