<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'feedback' => 'required|string',
            'classificacao' => 'required|in:ÓTIMO,MUITO BOM,BOM,REGULAR,RUIM,PÉSSIMO',
        ]);

        // Salvar as respostas no banco de dados
        Feedback::create($request->all());

        // Redirecionar para uma página de agradecimento ou outra ação
        return redirect('/feedback');
    }

    public function index()
    {
        $feedbacks = Feedback::all();
        return view('feedback.index', compact('feedbacks'));
    }
}
