<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Models\Vinculo;

class VinculoApiController extends Controller
{
    public function __construct(Vinculo $vinculo, Request $request)
    {
        $this->cliente = $vinculo;
        $this->request = $request;
    }

    public function cliente($id)
    {
        if(!$data = $this->cliente->with('cliente')->find($id)){
            return response()->json (['error' => 'Nada foi encontrado'], 404);
        }else{
            return response()->json($data);
        }
    }
}
