<?php 

namespace App\Controllers;

use App\Models\Movie;
use App\Services\View;
class MovieController {
    public function index(): View{
        // $movies = (new Movie())->all(); 
        $movies = Movie::get();
        dd($movies);
        return view('movies/index', compact('movies'));
    }
}

?>