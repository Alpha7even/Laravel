<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController; // ✅ Importando o controller

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui você pode registrar as rotas para sua aplicação. Elas serão
| carregadas pelo RouteServiceProvider dentro de um grupo que contém
| o middleware "web". Agora crie algo incrível!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// ✅ Adicionando uma rota para listar produtos
Route::get('/produtos', [ProdutoController::class, 'index']);
