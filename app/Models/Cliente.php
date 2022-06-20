<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Models\Vinculo;
use App\Models\Models\Produto;

class Cliente extends Model
{
    protected $fillable =
        [
            'name',
            //'cpf_cnpj'
        ];

    public function rules()
    {
        return [
            'name' => ' required',
            // 'cpf_cnpj' => 'required|unique:clientes',
        ];
    }

    public function vinculo()
    {
        return $this->hasOne(Vinculo::class, 'cliente_id', 'id');
    }

    public function produto()
    {
        return $this->hasMany(Produto::class, 'cliente_id', 'id');
    }
}
