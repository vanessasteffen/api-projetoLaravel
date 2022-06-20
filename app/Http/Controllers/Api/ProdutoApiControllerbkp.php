<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Produto;



class ProdutoApiControllerbkp extends Controller
{
    public function __construct(Produto $produto, Request $request)
    {
        $this->produto = $produto;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->produto->all();
        return response()->json($data);
    }
}

