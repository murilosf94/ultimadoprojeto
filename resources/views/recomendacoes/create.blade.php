@extends('layouts.main')

@section('title', 'Nova Recomendação')

@section('content')
    <div class="container">
        <h1>Nova Recomendação</h1>

        <form action="{{ route('recomendacoes.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" class="form-control">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Criar Recomendação</button>
            </div>
        </form>
    </div>
@endsection
