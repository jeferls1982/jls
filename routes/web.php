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
// -------------------------------------------------- rotas loteria

Route::post('/loto/save_apostas', 'loto\ApostaController@save_aposta');



Route::get('/he/get_dados_grafico', 'he\HoraExtraController@getDadosGrafico');
Route::get('/he/delete/{id}', 'he\HoraExtraController@destroy');

Route::post('/he/addPagamento', 'he\HoraExtraController@addPagamento');
Route::resource('/he', 'he\HoraExtraController');


Route::get('/noticias/getNoticias', 'noticias\NoticiaController@getNoticias');



//------------------------------------------------------------------------loja
Route::resource('/loja', 'loja\LojaController');


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
