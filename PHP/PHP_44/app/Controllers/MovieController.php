<?php

namespace App\Controllers;

use App\Models\Movie;
use App\Services\View;

class MovieController
{
    public function index(): View
    {
        // $movies = (new Movie())->get();
        $movies = Movie::get();
        // dd($movies);
        // dd($movies[3]->title);
        return view('movies/index', compact('movies'));
    }

    public function show(int $id): View{

        $movie = Movie::find($id);
        // $movie = Movie::where('title', 'like', '%tan%')->get();
        dd($movie);
        return view('movies/show', compact('movies'));
    }
}

?>