@extends('layout')

@section('cabecalho')
    Adicionar Genero
@endsection

@section('conteudo')
    <form method="post" action="/generos">
        @csrf
        <div class="input-group d-flex justify-content-between">
            <label class="mr-2" for="nome_genero">Genero: </label>
            <input type="text" class="form-control" id="nome_genero" name="nome_genero">
        </div>
        <button class="btn btn-primary mt-2">Adicionar</button>
    </form>
@endsection
