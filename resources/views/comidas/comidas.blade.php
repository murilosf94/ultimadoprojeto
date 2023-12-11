@extends('layouts.main')

@section('title', 'Pacotes de Comidas')

@section('content')

    <h1>Pacotes</h1>

    @if (Auth::user()->acesso == 'd' || Auth::user()->acesso == 'b' || Auth::user()->acesso == 'c')
    <h3> <a href="comidas/create"> CRIAR NOVO PACOTE </a></h3>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Imagem</th>
                <th>Imagem</th>
                <th>Imagem</th>
                @if (Auth::user()->acesso == 'd' || Auth::user()->acesso == 'b' || Auth::user()->acesso == 'c')
                <th>Ações</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($pacote as $pacote)
                <tr>
                    <td>{{ $pacote->id }}</td>
                    <td>{{ $pacote->nome }}</td>
                    <td>{{ $pacote->descricao }}</td>
                    <td>{{ $pacote->preco }}</td>
                    <td><img src="img/pacotes/{{ $pacote->image }}" width=100px></td>
                    <td><img src="img/pacotes/{{ $pacote->image2 }}" width=100px></td>
                    <td><img src="img/pacotes/{{ $pacote->image3 }}" width=100px></td>
                    @if (Auth::user()->acesso == 'd' || Auth::user()->acesso == 'b' || Auth::user()->acesso == 'c')
                                    <td><a href="/comidas/edit/{{ $pacote->id }}"><button type="button"> Editar </button></a>
                                    <form action="/comidas/{{ $pacote->id }}" method="POST"> 
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')"> Deletar </button>
                                    </form>
                                    </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection