<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;  
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Models\Food;


class FoodController extends Controller
{

    public function index()
    {
        $pacote = new Food;
        $pacote = $pacote->all();
        return view('comidas', compact('pacote'));
    }
    
    public function create()
    {
        return view('comidas.create');
    }
    
    public function store(Request $request)
    {
        $pacote = new Food;
        
        $pacote->nome = $request->nome;
        $pacote->descricao = $request->descricao;
        $pacote->preco = $request->preco;

        $pacote->save();

        $pacote = new Food;

        return view('comidas/comidas', compact('pacote'));
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