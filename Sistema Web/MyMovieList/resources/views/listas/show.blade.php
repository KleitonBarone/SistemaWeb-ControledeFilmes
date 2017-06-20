@extends('layouts.app')

@section('titulo', 'Mostrar Listas - MyMovieList')

@section('content')
<div class="container z-depth-5">
        <div class="container">
        <br>
        <h1 class="center">{{$lista->nome}}</h1>
        <?php
          foreach ($users as $user){
            if($user->id == $lista->user_id){
                $criador = $user->name;
                break;
            };
          };
        ?>
        <h5>Criado por: {{$criador}}</h5>
        <br>
        <div class="divider"></div>
        @if( count($lista->filme) > 0)
        <table class="highlight">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Filme</th>
                                    <th>Genero</th>
                                    <th>Ator</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                         @foreach ($lista->filme as $filme)
                         
                                <tr>
                                    <td>{{$filme->id}}</td>
                                    <td>{{$filme->titulo}}</td>
                                    <td>{{$filme->genero->nome}}</td>
                                    <td>{{$filme->ator->nome}}</td>
                                    <td>
                                    <form style="display: inline;" action="{{route('listas.deletefilme', $lista->id)}}" method="post">
                                        
                                             {{csrf_field()}}

                                             <input  type="hidden" id="filme" name="filme" value="{{$filme->id}}" />
                                        

                                             <button class="waves-effect waves-light btn red">Apagar</button>

                                    </form>
                                    </td>
                                </tr>
                             @endforeach
                            </tbody>
                        </table>
                        @else
                        <br>
                                <div class="center">
                                <br>
                                <h5>Sem resultados, Adicione um Filme!</h5>
                                <br>
                                </div>
                        @endif
                        <br>
                        <div class="divider"></div>
                        <br>
                        <h5>Adicione Filmes á Lista:</h5>
                        <form action="{{route('listas.addfilme', $lista->id)}}" method="post">

                        {{csrf_field()}}
                        <?php
                            $option = 0;
                         ?>
                        <select name="filmes" id="filmes" required>
                         
                         @if( count($lista->filme) > 0)  

                            @foreach($filmes as $filme)
                                <?php
                                 $hit = 0;
                                ?>

                                 @foreach ($lista->filme as $filmelista)
                                  @if($filme->id == $filmelista->id)

                                    <?php
                                        $hit = 1;
                                        
                                    ?>
                                    
                                  @endif
                                 @endforeach

                                 @if($hit === 0)
                                 <option value="{{$filme->id}}">{{$filme->titulo}}</option>
                                 <?php
                                  $option = 1;
                                 ?>
                                 @endif

                            @endforeach

                        @else

                            @foreach($filmes as $filme)
                            <option value="{{$filme->id}}">{{$filme->titulo}}</option>
                            <?php
                             $option = 1;
                            ?>
                            @endforeach

                        @endif
                          @if ($option === 0)
                           <option value="" disabled selected>Não há mais filmes para adicionar!</option>
                          @endif
                        </select>
                        <label for="filmes">Filmes</label>

                        <div class="center">
                        <button class="waves-effect waves-light blue btn" type="submit">Adicionar Filme a Lista</button>
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
<br>
<br>
<br>
</div>
@endsection