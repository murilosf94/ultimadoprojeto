@extends('layouts.main')

@section('title', 'Confirmar Presença')

@section('content')

<div class="container">
        <h2>Convidados Confirmados para o Evento {{ $event->name }}</h2>

        @if(count($convidados) > 0)
            <ul>
                @foreach($convidados as $convidado)
                    <li>
                        <strong>Nome:</strong> {{ $convidado->nome }},
                        <strong>CPF:</strong> {{ $convidado->cpf }},
                        <strong>Idade:</strong> {{ $convidado->idade }}
                    </li>
                @endforeach
            </ul>
        @else
            <p>Nenhum convidado confirmado para este evento até agora.</p>
        @endif
    </div>

@endsection