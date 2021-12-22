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
Route::post('/','EventController@index');

Route::get('/sobre','SobreNosController@sobrenos');

Route::get('/contato','ContatoController@contato');

Route::prefix('/app')->group(function(){

Route::get('/login',function(){return'login';});

Route::get('/clientes',function(){return'clientes';});

Route::get('/fornecedores','FornecedoresContrtoller@index');

Route::get('/produto',function(){return'produto';});
});
Route::get('/teste/{p1}/{p2}','TesteContrtoller@Teste');

Route::fallback(function(){
    echo "<h1> Pagina não Encontrada <h1>";
});


