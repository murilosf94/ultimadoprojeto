<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['nome', 'descricao', 'preco'];

    public function itens()
    {
        return $this->hasMany(ItemPacote::class);
    }
}