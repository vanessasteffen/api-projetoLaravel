<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProdutoApiControllerbkp;
use App\Http\Controllers\Api\ProdutoApiController;
use App\Http\Controllers\Api\ClienteApiController;

//Route:: get('/produtos', [ProdutoApiControllerbkp::class, 'index']);
//Route:: get('/clientes', [ClienteApiController::class, 'index']);

Route::apiResource('produtos', ProdutoApiController::class);
Route:: apiResource('clientes', ClienteApiController::class);
