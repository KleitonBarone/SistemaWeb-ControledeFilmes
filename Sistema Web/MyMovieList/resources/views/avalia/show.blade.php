@extends('layouts.app')

@section('titulo', 'Avaliar Lista - MyMovieList')

@section('content')
<div class="container z-depth-5">
        <div class="container">
        <br>
        <h1 class="center">{{$lista->nome}}</h1>
        <br>
        <div class="divider"></div>
        @if( count($lista->user) > 0)
        <h5>Nota Media:
        <?php 
        $nota_total = 0;
        $numero_notas = 0;
        foreach ($lista->user as $user) {
        $nota_total += $user->pivot->nota;
        $numero_notas++;
        };
        $media = $nota_total / $numero_notas;
        ?> 
        <strong>{{$media}}</strong>
        </h5>
        <table class="highlight">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Usuario</th>
                                    <th>Nota</th>
                                   
                                    
                                </tr>
                            </thead>
                            <tbody>
                         @foreach ($lista->user as $user)
                         
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->pivot->nota}}</td>
                                    
                                </tr>
                             @endforeach
                            </tbody>
                        </table>
                        @else
                        <br>
                                <div class="center">
                                <br>
                                <h5>Sem resultados, Avalie a Lista!<h5>
                                <br>
                                </div>
                        @endif
                        <br>
                        <div class="divider"></div>
                        <br>
                        <?php
                         $hit = 0;
                         $user_id = Auth::user()->name ;
                        ?>
                         @foreach ($lista->user as $user)

                         @if ($user->id == $user->id)
                         <?php
                             $hit = 1;
                         ?>
                         @endif
                         @endforeach

                         @if($hit == 0)
                        <h5>Avalie a Lista:</h5>
                        <form action="{{route('avalia.addavalia', $lista->id)}}" method="post" style="display: inline;">

                        {{csrf_field()}}
                        
                            <div class="input-field">
                                <select name="nota" id="nota" required>
                        
                                <option value="1">Nota 1</option>
                                <option value="2">Nota 2</option>
                                <option value="3">Nota 3</option>
                                <option value="4">Nota 4</option>
                                <option value="5" selected>Nota 5</option>
                            
                                </select>
                                <label for="genero">Nota</label>
                            </div>

                        <div class="center">
                        <button class="waves-effect waves-light blue btn" type="submit">Avalie</button>
                        </div>            
                        </form>
                        @else
                        <h5>Mude sua Nota:</h5>
                        <form action="{{route('avalia.mudaavalia', $lista->id)}}" method="post" style="display: inline;">

                        {{csrf_field()}}
                        
                            <div class="input-field">
                                <select name="nota" id="nota" required>
                        
                                <option value="1">Nota 1</option>
                                <option value="2">Nota 2</option>
                                <option value="3">Nota 3</option>
                                <option value="4">Nota 4</option>
                                <option value="5" selected>Nota 5</option>
                            
                                </select>
                                <label for="genero">Nota</label>
                            </div>

                        <div class="center">
                        <button class="waves-effect waves-light blue btn" type="submit">Mudar!</button>
                        </div>            
                        </form>
                        @endif
                    

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