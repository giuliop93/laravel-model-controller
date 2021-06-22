<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function showAllMovies () {
        $datiMovie = config("movie");

        $datiView = [
            "moviesList" => $datiMovie,
        ];

        return view("movies", $datiView);
    }
}
