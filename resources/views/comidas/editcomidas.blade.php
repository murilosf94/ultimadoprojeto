@extends('layouts.main')

@section('title', 'Pacotes de Comidas')

@section('content')

<h1>Editar Pacote</h1>

<form action="/update" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" class="form-control" value="{{ $pacote->nome }}" required>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" class="form-control" required>{{ $pacote->descricao }}</textarea>
    </div>
    <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="text" name="preco" class="form-control" value="{{ $pacote->preco }}" required>
    </div>
    <!-- Adicione outros campos conforme necessário -->

    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
@endsection