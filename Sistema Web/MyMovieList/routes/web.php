<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware'=>'auth'], function(){
    
Route::resource('generos', 'GeneroController');

Route::resource('filmes', 'FilmeController');

Route::resource('ators', 'AtorController');

Route::resource('listas', 'ListaController');

//sistema de listas
Route::post('listas/{lista}', ['uses' => 'FilmeLista@addfilme',
'as'=> 'listas.addfilme']);

Route::post('listas/{lista}/delete', ['uses' => 'FilmeLista@deletefilme',
'as'=> 'listas.deletefilme']);

Route::get('search/listas', ['uses' => 'ListaController@procuralista',
'as'=> 'listas.procuralista']);

//sistema de avaliação
Route::get('listas/{lista}/avalia', ['uses' => 'UserLista@showavalia',
'as'=> 'avalia.show']);

Route::post('listas/{lista}/avaliaadd', ['uses' => 'UserLista@addavalia',
'as'=> 'avalia.addavalia']);

Route::post('listas/{lista}/avaliamuda', ['uses' => 'UserLista@mudaavalia',
'as'=> 'avalia.mudaavalia']);

});



