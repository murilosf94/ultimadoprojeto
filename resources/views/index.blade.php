@extends('layouts.main')

@section('title', 'Página Principal')

@section('content')

		<div id="area-principal">
			<div id="area-postagens">
				
				<!-- abertura postagem -->
				<div class="postagem">
					<h2>Há 15 anos proporcionando momentos únicos para as crianças.</h2>
					<br>
					<img width="620px" src="/img/brinquedo1.jpg">
				</div><!-- fechamento postagem -->
				
				<!-- abertura postagem -->

				<!-- abertura postagem -->
				<div id="area-postagens2" class="postagem">
					<img width="230px" src="/img/brinquedo3.jpg">
				</div><!-- fechamento postagem -->	

				<!-- abertura postagem -->
				<div id="area-postagens2" class="postagem">
				<a href="comidas"> CONHEÇA NOSSOS PACOTES DE COMIDAS </a>
				<a href="/comidas">	<img width="230px" src="/img/salgadinhos.jpg"> </a>
				</div><!-- fechamento postagem -->	

			</div>

			<div id="area-postagens">
				<div class="postagem">
					<h2>Próximos Eventos</h2>
					<p class="subtitle">Veja os eventos dos próximos dias:</p>
					<div>
						@foreach ($events as $event)
							<div id="cardnomenu" class="postagem">
								<div>
									<p>{{ date('d/m/Y', strtotime($event->date)) }}</p>
									<h2>Festa de: {{ $event->name }} ( {{ $event->age }} ano(s) )</h2>
									<p>Participantes</p>
									<a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
								</div>
							</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>






@endsection

