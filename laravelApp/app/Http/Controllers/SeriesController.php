<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View as ViewFacade;
use Illuminate\Support\Str;
use Illuminate\View\View;
class SeriesController
{
    public function index(): View
    {
        $series = Serie::all();

        return ViewFacade::make('series.index', compact('series'));
    }

    public function create(): View
    {
        return ViewFacade::make('series.create');
    }

    public function store(Request $req)
    {
        $name = $req->name;

        $serie = Serie::create([
            'id' => Str::uuid()->toString(),
            'name' => $name,
        ]);
//        ou
//        $serie = Serie::create($req->all());

        echo "Serie {$serie->name} criada com sucesso. Retorne a pagina principal.";
    }
}
