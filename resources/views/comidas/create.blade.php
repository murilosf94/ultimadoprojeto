@extends('layouts.main')

@section('title', 'Comidas')

@section('content')

<h1>Criar Pacote</h1>

<form action="/comidas" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="text" name="preco" class="form-control" required>
    </div>
    <!-- Adicione outros campos conforme necessário -->

    <button type="submit" class="btn btn-success">Salvar</button>
</form>
@endsection

