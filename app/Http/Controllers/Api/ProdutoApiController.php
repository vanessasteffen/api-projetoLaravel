<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Produto;



class ProdutoApiController extends Controller
{
//    public function __construct(Produto $produto, Request $request)
//    {
//        $this->produto = $produto;
//        $this->request = $request;
//    }
//    public function index()
//    {
//        $data = $this->produto->all();
//        return response()->json($data);
//    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto([
            'name' => $request->get('name'),
            'size' => $request->get('size'),
            'price' => $request->get('price'),
            'description' => $request->get('description'),
        ]);
        $produto->save();
        return response()->json('Successfully added');
    }
}
