<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pacote extends Model
{
    protected $fillable = ['nome', 'descricao', 'preco'];
    // Adicione outros campos conforme necessário

    // Relacionamentos, se aplicável
    // Exemplo de relação com itens do pacote (supondo que cada pacote tem muitos itens)
    public function itens()
    {
        return $this->hasMany(ItemPacote::class);
    }
}