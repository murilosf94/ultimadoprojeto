<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
use App\Models\Food;
use App\Models\Recomendacoes;
use Carbon\carbon;


class RecomendacoesController extends Controller
{
    public function index()
    {
        $recomendacao = Recomendacoes::all();
        return view('recomendacoes.index', compact('recomendacao'));
    }

    public function show($id)
    {
        // Lógica para obter os dados da recomendação com o ID fornecido
        $recomendacao = Recomendacoes::findOrFail($id);

        // Retorna a view 'recomendacoes.show' com os dados da recomendação
        return view('recomendacoes.show', ['recomendacao' => $recomendacao]);
    }


    public function create()
    {
        return view('recomendacoes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Recomendacoes::create($request->all());

        return redirect()->route('recomendacoes.index');
    }

    public function edit($id)
    {
        $recomendacao = Recomendacoes::findOrFail($id);
        return view('recomendacoes.edit', compact('recomendacao'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Recomendacoes::findOrFail($id)->update($request->all());

        return redirect()->route('recomendacoes.index');
    }

    public function destroy($id)
    {
        Recomendacoes::destroy($id);

        return redirect()->route('recomendacoes.index');
    }
}