<?php

use App\Http\Controllers\CardapioController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProducaoController;
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
    return view('home');
});

Route::get('/registerclient', function () {
    return view('registerclient');
});

Route::get('/cardapio', function () {
    return view('cardapio');
});

Route::get('/relatorios', function () {
    return view('relatorios');
});

Route::get('/producao', [ProducaoController::class, 'exibirpedidos']);
Route::post('/saveclient', [ClientController::class, 'index']);
Route::post('/saveproduct', [CardapioController::class, 'index']);
Route::get('/pedidos', [PedidoController::class, 'buscainfo']);
Route::get('/pedidos/confpedido', [PedidoController::class, 'confpedido']);

// Route::get('/pedidos/clientsearch/{nome}', [PedidoController::class, 'buscanmcliente']);
// Route::get('/pedidos/confpedido', function () {
//     return view('confpedido');
// });

