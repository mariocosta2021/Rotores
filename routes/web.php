<?php

use Illuminate\Support\Facades\Route;

/* SITE */
route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);
Route::get('/viaturas', ['as' => 'site.viaturas', 'uses' => 'Site\ViaturasController@index']);

Route::post('/cadastrar', ['as' => 'site.cadastrar', 'uses' => 'Site\cadastroController@store']);




/* END SITE */



/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
