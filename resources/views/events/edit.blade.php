@extends('layouts.main')

@section('title', 'Editar Reserva')

@section('content')

<div id="area-principal">
  <h1>Editando: {{ $event->title }}</h1>
  <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div id="area-postagens" class="postagem">
      <label for="title">Aniversariante:</label>
      <input type="name" class="form-control" id="title" name="name" placeholder="Aniversariante" value="{{ $event -> name }}" >
    </div>
    
    <div id="area-postagens" class="postagem">
      <label for="date">Data do evento:</label>
      <input type="date" class="form-control" id="date" name="date" value="{{ $event -> date }}">
    </div>

    <div id="area-postagens" class="postagem">
      <label for="title">A Festa é de quantos anos?</label>
      <input type="text" class="form-control" id="city" name="age" placeholder="Idade" value="{{ $event -> age }}">
    </div>

    <div id="area-postagens" class="postagem">
      <label for="title">Quantos convidados são esperados?</label>
      <input name="guests" id="description" class="form-control" placeholder="Estimativa de convidados" value="{{ $event -> guests }}"></input>
    </div>

    <div id="area-postagens" class="postagem">
      <p> Qual pacote deseja escolher? </p>
      <select name="items" id="name">
        @foreach ($pacote as $pacote)
          <option>
            {{ $pacote->nome }}
          </option>  
        @endforeach
      </select>
    </div>

    <div id="area-postagens">
      <div id="botaofazer" class="postagem"> 
        <button type="submit" class="postagem" value="Editar Evento"> EDITAR FESTA </button>
      </div>
    </div>

  </form>
</div>

@endsection