@extends('layouts.main')

@section('title', 'Agenda')

@section('content')

<h1>Criar Pacote</h1>

<form action="/comidas" method="POST">
    @csrf
    <div class="form-group">
        <label for="data">Escolha a data disponivel:</label>
        <input type="text" name="data" class="form-control" required>
    </div>

@endsection