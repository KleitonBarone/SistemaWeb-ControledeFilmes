@extends('layouts.app')

@section('titulo', 'Avaliar Lista - MyMovieList')

@section('content')
<div class="container z-depth-5">
        <div class="container">
        <br>
        <h1 class="center">{{$lista->nome}}</h1>
        <br>
        <div class="divider"></div>
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
                         <div class="input-field inline">
                        
                        <div class="row">
                        <div class="col s12">
                        <strong>Avalie a Lista:</strong>
                        @for($i=1; $i<=5; $i++)
                        <form action="{{route('avalia.addavalia', $lista->id)}}" method="post" style="display: inline;">
                        {{csrf_field()}}
                        
                        <input type="hidden" value="{{$i}}" name="nota" id="nota">
                        <button type="submit" class="waves-effect waves-teal btn-flat"><i class="material-icons">grade</i></button>
                        
                        </form>
                        @endfor
                        <strong>Estrelas</strong>
                        </div>
                        </div>
                        </div>
                        @else
                        
                        <div class="input-field inline">
                        <div class="row">
                            <strong>Mude sua Nota:</strong>
                        @for($i=1; $i<=5; $i++)
                        <form action="{{route('avalia.mudaavalia', $lista->id)}}" method="post" style="display: inline;">
                        {{csrf_field()}}
                        
                        <input type="hidden" value="{{$i}}" name="nota" id="nota">
                        <button type="submit"  class="waves-effect waves-teal btn-flat" ><i class="material-icons">grade</i></button>
                        
                        </form>
                        @endfor
                        <strong>Estrelas</strong>
                        </div>
                        </div>
                        @endif 
        <div class="divider"></div>
        <br>
        <br>
        @if( count($lista->user) > 0)
        <h5>Media de Notas da Lista:
        <?php 
        $nota_total = 0;
        $numero_notas = 0;
        foreach ($lista->user as $user) {
        $nota_total += $user->pivot->nota;
        $numero_notas++;
        };
        $media = $nota_total / $numero_notas;
        ?> 
        <strong>{{$media}} Estrelas</strong>
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
                                    <td>{{$user->pivot->nota}} Estrelas</td>
                                    
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