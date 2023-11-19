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
        $pacotes = Food::all();
        return view('comidas', compact('pacotes'));
    }
    
    public function create()
    {
        return view('comidas.create');
    }
    
    public function store(Request $request)
    {
        Pacote::create($request->all());
        return redirect()->route('comidas');
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