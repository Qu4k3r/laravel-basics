<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
class SeriesController
{
    public function index(): string
    {
        $series = [
            'Sherlock',
            'Friends',
            'Forever',
            'One Tree Hill',
        ];

        return View::make('series.index', compact('series'));
    }

    public function create()
    {
        return View::make('series.create');
    }
}
