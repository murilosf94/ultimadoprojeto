@extends('layouts.main')

@section('title', 'Confirmar Presença')

@section('content')

<div class="container">
        <h2>Confirmar Presença</h2>

        <!-- Formulário -->
        <form method="post" action="/confirmar-presenca/{{$event->id}}">
            @csrf
            <!-- Campos para o convidado -->
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome[]" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf[]" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="text" name="idade[]" class="form-control" required>
            </div>

            <input type="hidden" value="{{$event->id}}" name="idfesta[]">

            <!-- Botão para adicionar mais convidados -->
            <button type="button" class="btn btn-primary" id="addGuest">Adicionar Outro Convidado</button>

            <!-- Botão de envio -->
            <button type="submit" class="btn btn-success">Confirmar Presença</button>
        </form>

        <hr>

        <!-- Lista de Convidados Confirmados -->
        <h3>Convidados Confirmados</h3>
        <ul>
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
            <p>Nenhum convidado confirmado até agora.</p>
            @endif
        </ul>
    </div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        // Adiciona dinamicamente campos para novos convidados
        $("#addGuest").click(function () {
            var newGuest = 
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome[]" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf[]" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="idade">Idade:</label>
                    <input type="text" name="idade[]" class="form-control" required>
                </div>
            `;

            $("#guestsContainer").append(newGuest);
        });
    });
</script>

@endsection