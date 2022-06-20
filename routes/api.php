<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClienteApiController;
use App\Http\Controllers\Api\ProdutoApiController;
use App\Http\Controllers\Api\VinculoApiController;



//Route:: get('/produtos', [ProdutoApiControllerbkp::class, 'index']);
Route::apiResource('vinculos', VinculoApiController::class);

Route:: get('clientes/{id}/vinculo', [ClienteApiController::class, 'vinculo']);
Route:: get('clientes/{id}/produtos', [ClienteApiController::class, 'produtos']);
Route:: apiResource('clientes', ClienteApiController::class);


Route:: get('vinculo/{id}/cliente', [VinculoApiController::class, 'cliente']);

Route::apiResource('vinculos', VinculoApiController::class);



Route:: get('produtos/{id}/clientes', [ProdutoApiController::class, 'clientes']);
Route:: apiResource('produtos', ProdutoApiController::class);
