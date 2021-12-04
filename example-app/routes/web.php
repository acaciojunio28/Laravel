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
Route::get('/','EventController@index');

Route::get('/sobre','SobreNosController@sobrenos');

Route::get('/contato','ContatoController@contato');

Route::get('/contato/{nome}',function($nome){
    echo "meu nome e $nome";
});
