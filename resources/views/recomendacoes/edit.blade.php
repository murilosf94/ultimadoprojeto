@extends('layouts.main')

@section('title', 'Editar Recomendação')

@section('content')
    <div class="container">
        <h1>Editar Recomendação</h1>

        <form action="{{ route('recomendacoes.update', $recomendacao->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $recomendacao->title) }}">
            </div>

            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" class="form-control">{{ old('description', $recomendacao->description) }}</textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Atualizar Recomendação</button>
            </div>
        </form>
    </div>
@endsection
