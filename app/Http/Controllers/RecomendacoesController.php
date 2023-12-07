<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;  
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Models\Food;


class FoodController extends Controller
{

    public function index(Food $pacote)
    {
        $pacote = $pacote->all();
        return view('comidas.comidas', ['pacote'=>$pacote]);
    }
    
    public function create()
    {
        $pacote = new Food;
        $pacote = $pacote->all();
        return view('comidas.create', compact('pacote'));
    }
    
    public function store(Request $request)
    {
        $pacote = new Food;
        
        $pacote->nome = $request->nome;
        $pacote->descricao = $request->descricao;
        $pacote->preco = $request->preco;

        $pacote->save();

        $pacote = $pacote->all();
        
        return view('comidas.comidas', compact('pacote'));
    }
    
    public function edit($id)
    {
        $pacote = Food::findOrFail($id);
        return view('comidas.editcomidas', compact('pacote'));
    }
    
    public function update(Request $request, $id, Food $pacote)
    {
        $pacote=$pacote->all();
        Food::findOrFail($request->id)->update($request->all());

        return view('comidas.comidas', compact('pacote'));
    }
    
    public function destroy($id)
    {
        Pacote::destroy($id);
        return redirect()->route('comidas.index');
    }

} 