<?php

use App\Models\User;
use App\Models\Event;
use App\Models\Convidado;
use App\Models\Food;

use Illuminate\Foundation\Auth\User as Authenticatable;

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
		<link rel="stylesheet" href="/css/estilo.css">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->

	</head>

	<body>

    <header>
        <div id="area-cabecalho">

            <div id="area-logo">
                <h1><span class="amarelo">Buffet Mundo Encantado</span></h1>
            </div>

            <div id="area-logo2" class="cadastro">
                <img width="50px" src="/img/usuario.jpg">
                @auth
                <menu>
                <a href="/dashboard" class="nav-link">Meus eventos</a>
                </menu>
                <menu>
                <form action="/logout" method="POST">
                  @csrf
                  <a href="/logout" 
                    class="nav-link" 
                    onclick="event.preventDefault();
                    this.closest('form').submit();">Sair
                  </a>
                </form>
                </menu>
                @endauth
                @guest
                <a href= "/register" style="color:#fbd305"> Cadastrar </a> |</scan> <a href="/login">Login </a>
                @endguest
            </div>

            <div id="area-menu">
                <a href="/">Home</a>|
                <a href="quemsomos">Quem Somos</a>|
                <a href="reserva">Fazer reserva</a>|
                <a href="contato">Entre em contato conosco</a>|
                <a href="comidas">Pacotes de comidas</a>|
                @auth
                @if (Auth::user()->acesso == 'd' || Auth::user()->acesso == 'b' || Auth::user()->acesso == 'c')
                    <a href="admindashboard"> Página de permissões </a>
                @endif
                @endauth
            </div>
        </div>
    </header>

        @yield('content')

    <footer>
			<div id="rodape">
				Buffet Mundo Encantado @2023
			</div>
    </footer>

	</body>
</html>
