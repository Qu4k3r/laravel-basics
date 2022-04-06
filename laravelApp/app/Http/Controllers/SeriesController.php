<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View as ViewFacade;
use Illuminate\Support\Str;
use Illuminate\View\View;

class SeriesController
{
    public function index(Request $req): View
    {
//        $series = Serie::all();
        $series = Serie::query()
            ->orderBy('name')
            ->get();

        $message = $req->session()->get('message');

        return ViewFacade::make('series.index', compact('series', 'message'));
    }

    public function create(): View
    {
        return ViewFacade::make('series.create');
    }

    public function store(Request $req): Redirector|Application|RedirectResponse
    {
        $name = $req->name;

        $serie = Serie::create([
            'id' => Str::uuid()->toString(),
            'name' => $name,
        ]);
//        ou
//        $serie = Serie::create($req->all());

//        $req->session()->put('message', "Serie {$serie->id} criada com sucesso: {$serie->name}");
        $req->session()->flash('message', "Serie {$serie->id} criada com sucesso: {$serie->name}");

        return Redirect::route('series.index');
    }

    public function destroy(Request $req, string $serieId)
    {
        $serie = Serie::find($serieId);
        Serie::destroy($serieId);
        $req->session()->flash('message', "Serie {$serie->name} removida com sucesso");

        return Redirect::route('series.index');
    }
}
