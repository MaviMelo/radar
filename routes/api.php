<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DeviceController;
use App\Http\Controllers\Api\UserController;

// Rota de API
Route::post('/devices', [DeviceController::class, 'store']);

// Rota para listar usuários
Route::get('/users', [UserController::class, 'index']);

// O Laravel sugere uma rota padrão para autenticação.
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
