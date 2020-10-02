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
Route::get('/he/get_dados_grafico', 'he\HoraExtraController@getDadosGrafico');
Route::post('/he/addPagamento', 'he\HoraExtraController@addPagamento');
Route::resource('/he', 'he\HoraExtraController');




Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
