@extends('layouts.main')

@section('title', 'Lista de Recomendações')

@section('content')
    <div id="area-principal">
        <h1>Lista de Recomendações!!!</h1>

        @if ($recomendacao !== null) 
        @if (count($recomendacao) > 0)
        <div id="area-postagens" class="postagem">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recomendacao as $recomendacao)
                        <tr>
                            <td>{{ $recomendacao->id }}</td>
                            <td>{{ $recomendacao->title }}</td>
                            <td>{{ $recomendacao->description }}</td>
                            <td>
                                <a href="{{ route('recomendacoes.show', $recomendacao->id) }}" class="btn btn-info">Ver</a>
                                @if (Auth::user()->acesso == 'c')
                                <a href="{{ route('recomendacoes.edit', $recomendacao->id) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('recomendacoes.destroy', $recomendacao->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                                </form>
                                @endif
                            </td>
                        </tr>
                    </div>
                    @endforeach
                </tbody>
            </table>
            </div>
        @else
        <div id="area-postagens" class="postagem">
            <p>Nenhuma recomendação encontrada.</p>
    </div>
        @endif
        @endif
    </div>
@endsection
