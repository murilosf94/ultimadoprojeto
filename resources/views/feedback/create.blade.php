@extends('layouts.main')

@section('title', 'Nos Avalie')

@section('content')
<div id="area-principal">
    <h1>AVALIE NOSSO SERVIÇO!!!</h1>
        <form action="/feedback" method="POST">
            @csrf
            <div id="area-postagens" class="postagem">
                <label for="nome">Digite seu nome:</label>
                <input type="text" name="nome" required>
            </div>
        
            <div id="area-postagens" class="postagem">
                <label for="feedback">Escreve um pouco sobre o que achou do nosso serviço:</label>
                <textarea name="feedback" required></textarea>
            </div>

            <div id="area-postagens" class="postagem">
                <label for="classificacao">Classique-nos:</label>
                <select name="classificacao" required>
                    <option value="ÓTIMO">ÓTIMO</option>
                    <option value="MUITO BOM">MUITO BOM</option>
                    <option value="BOM">BOM</option>
                    <option value="REGULAR">REGULAR</option>
                    <option value="RUIM">RUIM</option>
                    <option value="PÉSSIMO">PÉSSIMO</option>
                </select>
            </div>

            <div id="area-postagens" class="postagem">
                <button type="submit">Enviar Feedback</button>
            </div>
    </form>
</div>
@endsection
