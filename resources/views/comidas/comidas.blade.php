@extends('layouts.main')

@section('title', 'Pacotes de Comidas')

@section('content')

    <h1>Pacotes</h1>

    <a href="comidas" class="btn btn-success">Criar Pacote</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pacotes as $pacote)
                <tr>
                    <td>{{ $pacote->id }}</td>
                    <td>{{ $pacote->nome }}</td>
                    <td>{{ $pacote->descricao }}</td>
                    <td>{{ $pacote->preco }}</td>
                    <td>
                        <a href="{{ route('pacotes.edit', $pacote->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('pacotes.destroy', $pacote->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection