<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;  
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Models\Food;
use App\Models\Agenda;


class FoodController extends Controller
{

    public function index()
    {
        $agenda = new Agenda;
        $pacote = $pacote->all();
        return view('agendadashboard', compact('agenda'));
    }
    
    public function create()
    {
        $pacote = new Food;
        $pacote = $pacote->all();
        return view('agenda.create', compact('agenda'));
    }
    
    public function store(Request $request)
    {
        $pacote = new Food;
        
        $pacote->nome = $request->nome;
        $pacote->descricao = $request->descricao;
        $pacote->preco = $request->preco;

        $pacote->save();

        $pacote = new Food;
        $pacote = $pacote->all();
        
        return view('agenda/comidas', compact('agenda'));
    }
    
    public function edit($id)
    {
        $pacote = Pacote::findOrFail($id);
        return view('comidas.editcomidas', compact('pacote'));
    }
    
    public function update(Request $request, $id)
    {
        $pacote = Pacote::findOrFail($id);
        $pacote->update($request->all());
        return redirect()->route('comidas.index');
    }
    
    public function destroy($id)
    {
        Pacote::destroy($id);
        return redirect()->route('comidas.index');
    }

}