<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProdutoApiController;

Route:: get('/produtos', [ProdutoApiController::class, 'index']);

Route::post('produtos', 'ProdutoApiController@store');
