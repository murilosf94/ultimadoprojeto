@extends('layouts.main')

@section('title', 'Feedbacks')

@section('content')

<div id="area-principal">
    <h1>Lista de Feedbacks</h1>

    @if ($feedbacks->isEmpty())
    <div id="area-postagens" class="postagem">
        <p>Nenhum feedback encontrado.</p>
    </div>
    @else
    
        <ul>
            @foreach ($feedbacks as $feedback)
            <div id="area-postagens" class="postagem">
                <li>
                    <strong>Nome:</strong> {{ $feedback->nome }}<br>
                    <strong>Feedback:</strong> {{ $feedback->feedback }}<br>
                    <strong>Classificação:</strong> {{ $feedback->classificacao }}
                </li>
    </div>
            @endforeach
        </ul>
    @endif
</div>
@endsection