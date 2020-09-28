<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/developers', 'CadastroController@index');
Route::get('/developers/create', 'CadastroController@create');
Route::post('/developers/store', 'CadastroController@store');
Route::get('/developers/{id}/edit', 'CadastroController@edit');
Route::put('/developers/{id}/update', 'CadastroController@update');
Route::delete('developers/{id}/destroy','CadastroController@destroy')->name('cadastros.delete');

