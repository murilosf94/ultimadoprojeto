@extends('layouts.main')

@section('title', 'Detalhes da Recomendação')

@section('content')
<div id="area-principal">
        <h1>Detalhes da Recomendação</h1>
<div id="area-postagens" class="postagem">
            <div class="card-body">
                <h5 class="card-title">Título: {{ $recomendacao->title }}</h5>
                <p class="card-text">Descrição: {{ $recomendacao->description }}</p>
            </div>

        <div class="mt-3">
            <a href="{{ route('recomendacoes.index') }}" class="btn btn-secondary">Voltar à Lista</a>
        </div></div>
    </div>
@endsection
