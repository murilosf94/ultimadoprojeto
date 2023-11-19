<?php

namespace App\Models;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convidado extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'cpf', 'idade', 'idfesta'];


    public function evento()
    {
        return $this->belongsTo(Event::class);
    }


}
