<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function edit(Series $series)
    {
        $series->load('parts');

        return Inertia::render('Series/Edit', [
            'series' => $series,
        ]);
    }

    public function update()
    {
        //
    }
}
