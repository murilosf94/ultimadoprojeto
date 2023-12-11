@extends('layouts.main')

@section('title', 'Página do ADM')

@section('content')

	<div id='area-principal'>
		@if (Auth::user()->acesso == 'b' || Auth::user()->acesso == 'd' )
		<div id='area-postagens' class='postagem'>
			<h1>CRUD DAS RESERVAS</h1>
			<a href='dashboard'>Clique Aqui</a>
		</div>

		<div id='area-postagens' class='postagem'>
			<h1>CRUD DOS PACOTES DE COMIDA</h1>
			<a href='comidas'>Clique Aqui</a>
		</div>

		@endif

        @if (Auth::user()->acesso == 'c')
		<div id='area-postagens' class='postagem'>
			<h1>RECOMENDAÇÕES PRÉ-FESTA</h1>
			<a href='recomendacoes'>Clique Aqui</a>
		</div>
		@endif

		@if (Auth::user()->acesso == 'd' || Auth::user()->acesso == 'b' || Auth::user()->acesso == 'c')
		<div id='area-postagens' class='postagem'>
			<h1>FEEDBACKS DOS NOSSOS CLIENTES</h1>
			<a href='feedback/index'>Clique Aqui</a>
		</div>
		@endif

	</div>	

@endsection
