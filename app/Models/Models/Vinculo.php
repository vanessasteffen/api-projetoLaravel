<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class Vinculo extends Model
{
    protected $fillable =
        [
            'cliente_id',
            'cpf_cnpj'
        ];
    public function rules()
    {
        return [
            'cliente_id' =>' required',
             'cpf_cnpj' => 'required|unique:vinculos',
        ];
    }
    public function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id');
    }
}
