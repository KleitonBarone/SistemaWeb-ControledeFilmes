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

Route::post('listas/{lista}', ['uses' => 'ListaController@addfilme',
'as' => 'listas.addfilme']);

});

Route::get('/sobre', function () {
    return view('sobre');
});

