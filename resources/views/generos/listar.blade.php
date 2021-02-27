@extends('layout')

@section('cabecalho')
    Generos de filmes
@endsection

@section('conteudo')
    <a href="/generos/create" class="btn btn-dark mb-2">Criar Novo</a>
    <ul class="list-group">
        @foreach($generos as $genero)
            <li class="list-group-item d-flex justify-content-between">
                <div>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item list-group-item-info">{{ $genero->id }}</li>
                        <li class="list-group-item list-group-item-secondary">{{ $genero->nome_genero }}</li>
                    </ul>
                </div>
                    <span class="d-flex align-items-center">
                    <form method="post" action="/generos/{{$genero->id}}"
                        onsubmit="return confirm('Tem certeza que deseja remover {{ $genero->nome_genero }}?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm btn-sm mr-2">Excluir</button>
                    </form>
                    <a href="/generos/{{$genero->id}}/edit" class="btn btn-warning btn-sm mr-2">Editar</a>
                </span>
            </li>
        @endforeach
    </ul>
@endsection
