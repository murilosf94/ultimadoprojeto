@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div id="area-principal">
        <div id="area-postagem" class="postagem">
            <h1> Minhas Reservas </h1>
        </div>
        
        <div id="area-postagem" class="postagem">
            @if(count($events)>0)
                <table>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Participantes</th>
                            @if (Auth::user()->acesso == 'd' || Auth::user()->acesso == 'b' || Auth::user()->acesso == 'c')
                            <th scope="col">Ações</th>
                            @endif
                        </tr>

                    <tbody>
                        @foreach($events as $event)
                            <tr>
                                <td scropt="row">{{ $loop-> index + 1}}</td>
                                <td><a href="events/{{ $event->id }}">{{ $event->name }}</a></td>
                                <td>0</td>
                                @if (Auth::user()->acesso == 'd' || Auth::user()->acesso == 'b' || Auth::user()->acesso == 'c')
                                    <td><a href="/events/edit/{{ $event->id }}"><button type="button"> Editar</button></a>
                                    <form action="/events/{{ $event->id }}" method="POST"> 
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"> Deletar </button>
                                    </form>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            @else
            <p>Você ainda não tem reservas, <a href="/events/create"> fazer reserva </a></p>
            @endif
        </div>
    </div>



@endsection