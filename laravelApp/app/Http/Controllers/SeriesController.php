<?php

namespace App\Http\Controllers;

class SeriesController
{
    public function index()
    {
        $series = [
            'Sherlock',
            'Friends',
            'Forever',
            'One Tree Hill',
        ];

        dump($series);
    }
}
