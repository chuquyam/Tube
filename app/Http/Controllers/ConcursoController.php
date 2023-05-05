<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\concursos;


class ConcursoController extends Controller

{
    //antes de acrescentar precisa estar logado
    public function __construct()
    {
        $this->middleware('auth');
    }
    //

    public function create()
    {
        return view('criarconcurso');
    }

    public function store(Request $request)
    {
        Concursos::create([
            'codconcurso' => $request->codconcurso,
            'nomedoconcurso'=> $request->nomedoconcurso,
            'numerodoedital'=> $request->numerodoedital,
            'nomedoinstituto'=> $request->nomedoinstituto,
            'nomedocargo' => $request->nomedocargo,
            'nomedaorganizadora'=> $request->nomedaorganizadora,
            'datadaprova' => $request->datadaprova,
            'datadeinicio'=> $request->datadeinicio,
            'datafinal'=> $request->datafinal,
            'nomeinterno' => $request->nomeinterno,
        ]);

        return "Concurso criado com Sucesso";
    }

}
