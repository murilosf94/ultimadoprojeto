@extends('layouts.main')

@section('title', 'Fazer Reserva')

@section('content')

<div id="area-principal">
  <h1>Faça a reserva da sua festa!!!</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div id="area-postagens" class="postagem">
      <label for="title">Aniversariante:</label>
      <input type="name" class="form-control" id="title" name="name" placeholder="Aniversariante" :value="old('name')">
    </div>
    
    <div id="area-postagens" class="postagem">
      <label for="date">Data do evento:</label>
      <input type="date" class="form-control" id="date" name="date">
      @if ($errors->any())
    <div class="cortextovermelho">
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>
    @endif

    </div>

    <div id="area-postagens" class="postagem">
      <label for="title">A Festa é de quantos anos?</label>
      <input type="text" class="form-control" id="city" name="age" :value="old('age')" placeholder="Idade">
    </div>

    <div id="area-postagens" class="postagem">
      <label for="title">Quantos convidados são esperados?</label>
      <input name="guests" id="description" class="form-control" :value="old('guests')" placeholder="Estimativa de convidados"></input>
    </div>

    <div id="area-postagens" class="postagem">
      <p> Qual pacote deseja escolher? </p>
      <select name="items" id="name" value="items">
        @foreach ($pacote as $pacote)
          <option>
            {{ $pacote->nome }}
          </option>  
        @endforeach
</select>      
    </div>

    <div id="area-postagens">
      <div id="botaofazer" class="postagem"> 
        <button type="submit" class="postagem" value="Criar Evento"> CRIAR FESTA </button>
      </div>
    </div>

  </form>
</div>

@endsection