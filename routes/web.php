<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;

Route::get('/cadastro', [CadastroController::class, 'create']);
Route::post('/cadastro', [CadastroController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});
