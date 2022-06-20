<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProdutoApiControllerbkp;
use App\Http\Controllers\Api\ProdutoApiController;
use App\Http\Controllers\Api\ClienteApiController;
use App\Http\Controllers\Api\VinculoApiController;


//Route:: get('/produtos', [ProdutoApiControllerbkp::class, 'index']);
//Route:: get('/clientes', [ClienteApiController::class, 'index']);



Route::apiResource('produtos', ProdutoApiController::class);

Route:: get('clientes/{id}/vinculo', [ClienteApiController::class, 'vinculo']);
Route:: apiResource('clientes', ClienteApiController::class);

Route:: get('vinculo/{id}/cliente', [VinculoApiController::class, 'cliente']);
Route:: apiResource('vinculo', VinculoApiController::class);

Route:: get('produto/{id}/cliente', [ProdutoApiController::class, 'produto']);
Route:: apiResource('produtos', ProdutoApiController::class);
