@extends('layout')

@section('cabecalho')
    Adicionar Filme
@endsection

@section('conteudo')
    <form method="post" action="/filmes">
        @csrf
        <div class="input-group d-flex justify-content-between">
            <label class="mr-2" for="nomeFilme">Filme: </label>
            <input type="text" class="form-control" id="nomeFilme" name="nomeFilme">
            <label class="ml-2 mr-2" for="genero">Gênero: </label>
            <select id="genero" name="genero">
                <option value="Aventura">Aventura</option>
                <option value="Biografico">Biografico</option>
                <option value="Comedia">Comedia</option>
                <option value="Drama">Drama</option>
                <option value="Horror">Horror</option>
                <option value="Suspense">Suspense</option>
                <option value="Historico">Historico</option>
            </select>
        </div>
        <button class="btn btn-primary mt-2">Adicionar</button>
    </form>
@endsection
