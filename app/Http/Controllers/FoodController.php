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
    
    public function create(Food $pacote)
    {
        $pacote = $pacote->all();
        return view('comidas.create', compact('pacote'));
    }
    
    public function store(Request $request)
    {
        $pacote = new Food;
        
        $pacote->nome = $request->nome;
        $pacote->descricao = $request->descricao;
        $pacote->preco = $request->preco;

        //img upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage  = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) ."." . $extension;

            $request->image->move(public_path('img/pacotes'), $imageName);

            $pacote->image = $imageName;
        }

        //img upload
        if($request->hasFile('image2') && $request->file('image2')->isValid()) {

            $requestImage2  = $request->image2;

            $extension = $requestImage2->extension();

            $imageName2 = md5($requestImage2->getClientOriginalName() . strtotime("now")) ."." . $extension;

            $request->image2->move(public_path('img/pacotes'), $imageName2);

            $pacote->image2 = $imageName2;
        }

        //img upload
        if($request->hasFile('image3') && $request->file('image3')->isValid()) {

            $requestImage3  = $request->image3;

            $extension = $requestImage3->extension();

            $imageName3 = md5($requestImage3->getClientOriginalName() . strtotime("now")) ."." . $extension;

            $request->image3->move(public_path('img/pacotes'), $imageName3);

            $pacote->image3 = $imageName3;
        }

        $pacote->save();

        $pacote = $pacote->all();
        
        return view('comidas.comidas', compact('pacote'));
    }
    
    public function edit($id, Food $pacote)
    {   
        $pacote=$pacote->all();
        $pacote = Food::findOrFail($id);

        return view('comidas.editcomidas', compact('pacote'));
    }

    public function update(Request $request) {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pacote = Food::findOrFail($request->id);
    
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage  = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) ."." . $extension;

            $request->image->move(public_path('img/pacotes'), $imageName);

            $pacote->image = $imageName;
        }

        if($request->hasFile('image2') && $request->file('image2')->isValid()) {

            $requestImage2  = $request->image2;

            $extension = $requestImage2->extension();

            $imageName2 = md5($requestImage2->getClientOriginalName() . strtotime("now")) ."." . $extension;

            $request->image2->move(public_path('img/pacotes'), $imageName2);

            $pacote->image2 = $imageName2;
        }

        if($request->hasFile('image3') && $request->file('image3')->isValid()) {

            $requestImage3  = $request->image3;

            $extension = $requestImage3->extension();

            $imageName3 = md5($requestImage3->getClientOriginalName() . strtotime("now")) ."." . $extension;

            $request->image3->move(public_path('img/pacotes'), $imageName3);

            $pacote->image3 = $imageName3;
        }
    
        $pacote->save();

        $pacote->update($request->except(['image', 'image2', 'image3']));
    
        return redirect('comidas.comidas', compact ('pacote'));
    }

    
    public function destroy($id, Food $pacote)
    {
        Food::destroy($id);
        $pacote=$pacote->all();
        return view('comidas.comidas', compact ('pacote'));
    }

} 