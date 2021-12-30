<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LoginMiddlewere;

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

Route::post('/','EventController@store')->middleware(LoginMiddlewere::class);

Route::get('/','EventController@create')->middleware(LoginMiddlewere::class);

Route::get('/listar','EventController@index')->middleware(LoginMiddlewere::class);

Route::delete('/listar/{id}','EventController@destroy')->middleware(LoginMiddlewere::class);

Route::get('/editar/{id}','EventController@show')->middleware(LoginMiddlewere::class);

Route::put('/editar/update/{id}','EventController@update')->middleware(LoginMiddlewere::class);

Route::get('/sair','SairController@sair')->middleware(LoginMiddlewere::class);

Route::get('/sobre','SobreNosController@sobrenos');

Route::get('/contato','ContatoController@contato');

Route::get('/login','LoginController@index');

Route::post('/login','LoginController@autenticar');

Route::prefix('/app')->group(function(){

Route::get('/clientes',function(){return'clientes';});

Route::get('/fornecedores','FornecedoresContrtoller@index');

Route::get('/produto',function(){return'produto';});
});
Route::get('/teste/{p1}/{p2}','TesteContrtoller@Teste');

Route::fallback(function(){
    echo "<h1> Pagina não Encontrada <h1>";
});
