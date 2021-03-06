<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class Produto extends Model
{
    protected $fillable =
        [
            'name',
            'size',
            'price',
            'description',
            'cliente_id'
        ];
    public function rules()
    {
    return [
        'name' =>' required',
        'size' => 'required',
        'price' => 'required',
        'description' => 'required',
        'cliente_id' => 'required'
    ];
    }
    public function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id');
    }
}
