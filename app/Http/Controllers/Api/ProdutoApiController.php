<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Models\Produto;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ProdutoApiController extends Controller
{

    public function __construct(Produto $produto, Request $request)
    {
        $this->produto = $produto;
        $this->request = $request;
    }

    public function cliente($id)
    {
        if (!$data = $this->cliente->witch('cliente')->find($id)) {
            return response()->json(['error' => 'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }

    public function index()
    {
        $data = $this->produto->all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        //inserindo dados na tabela
        $this->validate($request, $this->produto->rules());
        $dataForm = $request->all();
        $data = $this->produto->create($dataForm);
        return response()->json($data, 201);
    }

    public function show($id)
    {
        //retorna os dados
        if (!$data = $this->produto->find($id)) {
            return response()->json(['error' => 'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }

    public function update(Request $request, $id)
    {
        if (!$data = $this->produto->find($id)) {
            return response()->json(['error' => 'Nada foi encontrado'], 404);
        }
    }

    public function destroy($id)
    {
        //deletando algum dado pelo id
        if (!$data = $this->produto->find($id)) {
            return response()->json(['error' => 'Nada foi encontrado'], 404);
        }
        $data->delete();
        return response()->json(['Sucess' => 'Deletado com Sucesso']);
    }
}
