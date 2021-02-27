<?php

namespace App\Http\Controllers;

use App\Filme;
use Illuminate\Http\Request;

class filmesController extends Controller
{
    public function index() {
        $filmes = Filme::query()
        ->orderBy('nome_filme')
        ->get();
        return view('filmes.listar', [
            'filmes' => $filmes
        ]);
    }

    public function create() {
        return view('filmes.adicionar');
    }

    public function edit($idFilme){
        $filme = Filme::find($idFilme);
        return view('filmes.editar', [
            'filme => $filme'
        ]);
    }
    public function store(Request $request){
        Filme::create($request->all());
        return redirect()->route('listar_filmes');
    }

    public function destroy($idFilme){
        $filme = Filme::find($idFilme);
        $filme->delete();
        return redirect()->route('listar_filmes');
    }

    public function update(Request $request, $idFilme){
        $filme = Filme::find($idFilme);
        $filme->nome_filme = $request->nomeFilme;
        $filme->ano_filme = $request->anoFilme;
        $filme->id_genero_pk = 1;
        $filme->save();
        return redirect()->route('listar_filmes');
    }
}
