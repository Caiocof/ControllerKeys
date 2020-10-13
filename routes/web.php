<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ControllerRoom;

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

/**
 * ROTAS CHAVE DAS SALAS
 */
Route::get('/chaves', [ControllerRoom::class, 'index']);

Route::get('/entregar/{id}', [ControllerRoom::class, 'show']);
Route::post('/entregar/store', [ControllerRoom::class, 'store']);

Route::get('/receber/{room_id}', [ControllerRoom::class, 'edit']);
Route::put('/receber/update/{room_id}', [ControllerRoom::class, 'update']);


/**
 * ROTAS DE ERRO
 */
Route::fallback(function () {
    echo '<h1>Oops... Rota invalida, erro 404</h1>';
});


