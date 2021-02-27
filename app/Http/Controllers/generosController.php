<?php

namespace App\Http\Controllers;

use App\Genero;
use Illuminate\Http\Request;

class generosController extends Controller
{
    public function index() {
        $generos = Genero::query()
            ->orderBy('nome_genero')
            ->get();
        return view('generos.listar', [
            'generos' => $generos
        ]);
    }

    public function create() {
        return view('generos.adicionar');
    }

    public function edit($idGenero){
        $genero = Genero::find($idGenero);
        return view('generos.editar', [
            'genero' => $genero
        ]);
    }
    public function store(Request $request){
        genero::create($request->all());
        return redirect()->route('listar_generos');
    }

    public function destroy($idGenero){
        $genero = Genero::find($idGenero);
        $genero->delete();
        return redirect()->route('listar_generos');
    }

    public function update(Request $request, $idGenero){
        $genero = Genero::find($idGenero);
        $genero->nome_genero = $request->nome_genero;
        $genero->save();
        return redirect()->route('listar_generos');
    }
}

