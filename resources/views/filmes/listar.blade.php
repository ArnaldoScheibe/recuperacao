@extends('layout')

@section('cabecalho')
    Filmes Assistidos
@endsection

@section('conteudo')
    <a href="/filmes/adicionar" class="btn btn-dark mb-2">Adicionar Filme</a>
    <ul class="list-group">
        @foreach($filmes as $filme)
            <li class="list-group-item"> {{$filme['nome_filme']}} - {{$filme['id_genero_fk]}}</li>
        @endforeach
    </ul>
@endsection

