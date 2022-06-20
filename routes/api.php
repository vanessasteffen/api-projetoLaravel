<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClienteApiController;
use App\Http\Controllers\Api\ProdutoApiController;
use App\Http\Controllers\Api\VinculoApiController;



//Route:: get('/produtos', [ProdutoApiControllerbkp::class, 'index']);
//Route:: get('/clientes', [ClienteApiController::class, 'index']);

Route:: get('clientes/{id}/produtos', [ClienteApiController::class, 'produtos']);
Route:: apiResource('clientes', ClienteApiController::class);

Route:: get('vinculo/{id}/clientes', [VinculoApiController::class, 'clientes']);
Route:: get('vinculo/{id}/produtos', [VinculoApiController::class, 'produtos']);
Route::apiResource('produtos', ProdutoApiController::class);
Route::apiResource('produtos', ProdutoApiController::class);


Route:: get('produtos/{id}/clientes', [ProdutoApiController::class, 'clientes']);
Route:: apiResource('produtos', ProdutoApiController::class);
