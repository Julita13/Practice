<?php

namespace App\Http\Controllers\Front;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontMovieController extends Controller
{
    public function index(){
        $movies = Movie::get();
        return view('front.movies.index', compact('movies'));
    }

    public function show(Movie $movie){
        // dd($movie);
        return view('front.movies.show', compact('movie'));
    }
}
