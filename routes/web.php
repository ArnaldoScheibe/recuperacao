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

Route::get('/filmes', 'filmesController@index')->name('listar_filmes');
Route::get('/filmes/create', 'filmesController@create');
Route::post('/filmes', 'filmesController@store');
Route::get('/filmes/{idFilme}/edit', 'filmesController@edit');
Route::put('/filmes/{idFilme}', 'filmesController@update');
Route::delete('/filmes/{idFilme}', 'filmesController@destroy');


Route::get('/generos', 'generosController@index')->name('listar_generos');
Route::get('/generos/create', 'generosController@create');
Route::post('/generos', 'generosController@store');
Route::get('/generos/{id_genero}/edit', 'generosController@edit');
Route::put('/generos/{id_genero}', 'generosController@update');
Route::delete('/generos/{id_genero}', 'generosController@destroy');

Route::get('/teste', 'TesteController@index');

Route::get('/', function () {
    return view('welcome');
});
