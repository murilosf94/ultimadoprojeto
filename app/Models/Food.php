<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['nome', 'descricao', 'preco', 'image', 'image2', 'image3'];

    public function itens()
    {
        return $this->hasMany(Food::class);
    }
}