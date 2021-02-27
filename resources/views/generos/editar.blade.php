@extends('layout')

@section('cabecalho')
    Editar genero
@endsection

@section('conteudo')
    <form method="post" action="/generos/{{$genero->id}}">
        @csrf
        @method('PUT')
        <div class="input-group d-flex justify-content-between">
            <label class="mr-2" for="nome_genero">Genero: </label>
            <input type="text" class="form-control" id="nome_genero" name="nome_genero" value="{{$genero->nome_genero}}">
        </div>
        <button class="btn btn-primary mt-2">Editar</button>
    </form>
@endsection
