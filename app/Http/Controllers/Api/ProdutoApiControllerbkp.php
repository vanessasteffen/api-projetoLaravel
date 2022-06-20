<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Produto;
use App\Models\Cliente;



class ProdutoApiControllerbkp extends Controller
{
    public function __construct(Produto $produto, Request $request)
    {
        $this->produto = $produto;
        $this->request = $request;
        $this->cliente = $produto;
    }

    public function index()
    {
        $data = $this->produto->all();
        return response()->json($data);
    }
    public function cliente($id)
    {
        if (!$data = $this->cliente->with('clientes')->find($id)) {
            return response()->json(['error' => 'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }
}

