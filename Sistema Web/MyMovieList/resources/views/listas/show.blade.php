@extends('layouts.app')

@section('titulo', 'Generos - MyMovieList')

@section('content')
 
<br>
<br>
<br>
<br>
<div class="container grey lighten-4">
        <div class="container">
        <h1 class="center">{{$lista->nome}}</h1>
        <br />
        <hr>
       <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Filme</th>
                                    <th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                         @forelse ($filmes as $filme)
                         
                                <tr>
                                    <td>{{$filme->id}}</td>
                                    <td>{{$filme->titulo}}</td>
                                    <td>

            </td>
                                </tr>
                             @empty
                                <tr><td>Sem resultados</td></tr>
                             @endforelse
                                
                            </tbody>
                        </table>

                        <form action="{{route('listas.addfilme', $lista->id)}}" method="post">
                        {{csrf_field()}}
                     <label for="filmes">Filmes</label>
                        <select name="filmes" id="filmes" class="form-control" required>
                            
                            @foreach($filmes as $filme)
                                <option value="{{$filme->id}}">{{$filme->titulo}}</option>
                            @endforeach
                            
                        
                        </select>

                        <button class="waves-effect waves-light blue btn" type="submit">Adicionar Filme</button>
                                    
                        </form>
                    

</div>
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
@endsection