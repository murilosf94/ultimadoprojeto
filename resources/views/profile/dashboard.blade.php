@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div id="area-principal">
        <div id="area-postagem" class="postagem">
            <h1> Meus Eventos </h1>
        </div>
        
        <div id="area-postagem" class="postagem">
            @if(count(eventas)>0)
            @else
            <p>Você ainda não tem reservas, <a href="/events/create"> fazer reserva </a></p>
            @endif
        </div>
    </div>

        

@endsection
