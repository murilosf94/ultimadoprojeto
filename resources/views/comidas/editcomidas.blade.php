@extends('layouts.main')

@section('title', 'Pacotes de Comidas')

@section('content')

<h1>Editando: {{ $pacote->nome }}</h1>

<form action="/comidas/update/{{ $pacote->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" class="form-control" value="{{ $pacote->nome }}">
    </div>
    
    <div class="form-group">
        <label for="image">Coloque três imagens do pacote:</label>
        <input type="file" name="image" class="form-control" value="{{ $pacote->image }}">
    </div>

    <div class="form-group">
        <input type="file" name="image2" class="form-control" value="{{ $pacote->image2 }}">
    </div>

    <div class="form-group">
        <input type="file" name="image3" class="form-control" value="{{ $pacote->image3 }}">
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" class="form-control" required>{{ $pacote->descricao }}</textarea>
    </div>

    <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="text" name="preco" class="form-control" value="{{ $pacote->preco }}">
    </div>

    <button type="submit" class="btn btn-primary" value="Editar Pacote">Atualizar</button>
</form>
@endsection