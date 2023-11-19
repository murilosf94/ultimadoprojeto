@extends('layouts.main')

@section('title', 'Fazer Reserva')

@section('content')

<div id="area-principal">
  <h1>Faça a reserva da sua festa!!!</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div id="area-postagens" class="postagem">
      <label for="title">Aniversariante:</label>
      <input type="name" class="form-control" id="title" name="name" placeholder="Aniversariante">
    </div>
    
    <div id="area-postagens" class="postagem">
      <label for="date">Data do evento:</label>
      <input type="date" class="form-control" id="date" name="date">
    </div>

    <div id="area-postagens" class="postagem">
      <label for="title">A Festa é de quantos anos?</label>
      <input type="text" class="form-control" id="city" name="age" placeholder="Idade">
    </div>

    <div id="area-postagens" class="postagem">
      <label for="title">Quantos convidados são esperados?</label>
      <input name="guests" id="description" class="form-control" placeholder="Estimativa de convidados"></input>
    </div>

    <div id="area-postagens" class="postagem">
      <label for="title">Qual pacote de comida você prefere?</label>
      <div class="postagem">	
        <input type="checkbox" name="items[]" value="Pacote 1"> Pacote 1
      </div>
      <div class="postagem">	
        <input type="checkbox" name="items[]" value="Pacote 2"> Pacote 2
      </div>
      <div class="postagem">	
        <input type="checkbox" name="items[]" value="Pacote 3"> Pacote 3
    </div>
    
    </div>

    <div id="area-postagens">
      <div id="botaofazer" class="postagem"> 
        <button type="submit" class="postagem" value="Criar Evento"> CRIAR FESTA </button>
      </div>
    </div>

  </form>
</div>

@endsection