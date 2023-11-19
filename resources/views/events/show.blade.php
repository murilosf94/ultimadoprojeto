@extends('layouts.main')

@section('title', $event->name)

@section('content')

  <div id="area-postagens">
  
      <div class="postagem">
        <h1>Festa de: {{ $event->name }}</h1>

      <div class="postagem">  
        <h3> Data da festa: </h3>
        <p> {{ date('d/m/Y', strtotime($event->date)) }}</p>
      </div>

      <div class="postagem">  
        <h3> Idade a ser comemorada: </h3>
        <p> {{ $event->age }}</p>
      </div>

      <div class="postagem">  
        <h3> Número de convidados esperados: </h3>
        <p> {{ $event->guests }}</p>
      </div>

      <div class="postagem">  
        <h3> Número de participantes confirmados: </h3>
        <p>Participantes</p>
      </div>

      <div class="postagem">
        <h3>O evento conta com:</h3>
        <ul>
        @foreach($event->items as $item)
          <li><span>{{ $item }}</span></li>
        @endforeach
        </ul>
      </div>

  </div>

@endsection