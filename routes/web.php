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

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobrenos')->name('site.sobrenos');
Route::prefix('/app')->group(function(){
    Route::get('/clientes', 'ClientesController@clientes')->name('site.clientes');
    Route::get('/fornecedores', 'FornecedoresController@fornecedores')->name('site.fornecedores');
    Route::get('/produtos', 'ProdutosController@produtos')->name('site.produtos');
});
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', 'LoginController@login')->name('site.login');

Route::fallback(function(){
    echo "Esta página não existe. <a href=".route('site.index').">Clique aqui</a> para ir para a página inicial.";
});