@extends('layouts.main')

@section('title', 'Comidas')

@section('content')

<h1>Criar Pacote</h1>

<form action="/comidas" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="form-group">
        <label for="image">Coloque três imagens do pacote:</label>
        <input type="file" name="image" class="form-control">
    </div>

    <div class="form-group">
        <input type="file" name="image2" class="form-control">
    </div>

    <div class="form-group">
        <input type="file" name="image3" class="form-control">
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="text" name="preco" class="form-control">
    </div>


    <button type="submit" class="btn btn-success" value="Criar Pacote">CRIAR</button>
</form>
@endsection

