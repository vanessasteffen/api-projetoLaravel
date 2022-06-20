<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Models\Produto;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteApiController extends Controller
{
    public function __construct(Cliente $cliente, Request $request)
    {
        $this->cliente = $cliente;
        $this->vinculo = $cliente;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->cliente->all();
        return response()->json($data);
        //return respose()->json('Deu certo');
    }

    public function store(Request $request)
    {
        //inserindo dados na tabela
        $this->validate($request, $this->cliente->rules());
        $dataForm = $request->all();
        $data = $this->cliente->create($dataForm);
        return response()->json($data, 201);
    }

    public function vinculo($id)
    {
        if(!$data = $this->vinculo->with('vinculo')->find($id)){
            return response()->json (['error' => 'Nada foi encontrado'], 404);
        }else{
            return response()->json($data);
        }
    }
}
