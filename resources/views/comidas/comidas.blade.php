@extends('layouts.main')

@section('title', 'Pacotes de Comidas')

@section('content')

    <h1>Pacotes</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pacote as $pacote)
                <tr>
                    <td>{{ $pacote->id }}</td>
                    <td>{{ $pacote->nome }}</td>
                    <td>{{ $pacote->descricao }}</td>
                    <td>{{ $pacote->preco }}</td>
                    <td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection