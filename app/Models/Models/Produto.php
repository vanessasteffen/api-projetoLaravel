<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable =
        [
            'name',
            'size',
            'price',
            'description'
        ];
    public function rules()
    {
    return [
        'name' =>' required',
        'size' => 'required',
        'price' => 'required',
        'description' => 'required'
    ];
    }
}
