<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Convidado; // Certifique-se de usar o modelo correto
use App\Models\Event;
use App\Http\Controllers\EventController;

class ConvidadoController extends Controller
{
    public function mostrarFormulario(string|int $id, Event $event,  Convidado $convidados)
    {
        $event = $event -> where('id', $id)->first();
        $convidados = $convidados -> where('idfesta', $id)->get();
        return view('convidado', ['convidados' => $convidados, 'event' => $event]); 
    }


    public function salvarConvidado(Request $request, string|int $id, Event $event, Convidado $convidados)
    {

        $data = $request->validate([
            'nome.*' => 'required|string|max:255',
            'cpf.*' => 'required|string|max:14',
            'idade.*' => 'required|integer|min:0',
            'idfesta.*' => 'required|integer|min:0'
        ]);


        foreach ($data['nome']as $key => $nome) {
            // Salve os dados no banco de dados
            Convidado::create([
                'nome' => $nome,
                'cpf' => $data['cpf'][$key],
                'idade' => $data['idade'][$key],  
                'idfesta'=>$data['idfesta'][$key]
            ]);
        }

        $event = $event -> where('id', $id)->first();
        $convidados = $convidados -> where('idfesta', $id)->get();
        return view('convidado', ['convidados' => $convidados, 'event' => $event]); 
    }

    public function listaConfirmados($eventId)
    {
        $event = Event::findOrFail($eventId);
        $convidados = $events->convidados;
    
        return view('listaconfirmados', ['convidados' => $convidados, 'event' => $events]);
    }
}
