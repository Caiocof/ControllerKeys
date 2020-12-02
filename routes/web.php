<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ControllerRoom;
use \App\Http\Controllers\ControllerLogin;
use \App\Http\Controllers\ControllerUser;

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

/**
 * ROTAS LOGIN
 */
Route::get('/', [ControllerLogin::class, 'dashboard'])->name('dashboard');
Route::get('/login', [ControllerLogin::class, 'showLogin'])->name('login');
Route::get('/logout', [ControllerLogin::class, 'logout'])->name('logout');
Route::post('/login/do', [ControllerLogin::class, 'login'])->name('login.do');


/**
 * ROTAS CADASTRO
 */
Route::get('/cadastro', [ControllerUser::class, 'index'])->name('index.user');
Route::post('/cadastro/store', [ControllerUser::class, 'store'])->name('store.user');


/**
 * ROTAS CHAVE DAS SALAS
 */
Route::get('/lista', [ControllerRoom::class, 'index'])->name('index.room');
Route::get('/entregar/{id}', [ControllerRoom::class, 'show'])->name('show.room');
Route::post('/entregar/store', [ControllerRoom::class, 'store'])->name('store.room');

Route::get('/receber/{room_id}', [ControllerRoom::class, 'edit'])->name('edit.room');
Route::put('/receber/update/{room_id}', [ControllerRoom::class, 'update'])->name('update.room');

Route::get('/listaOcupadas', [ControllerRoom::class, 'busy'])->name('busy.room');


/**
 * ROTAS DE ERRO
 */
Route::fallback(function () {
    echo '<h1>Oops... Rota invalida, erro 404</h1>';
});


