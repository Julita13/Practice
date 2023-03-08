<?php

namespace App\Controllers\Admin;

use App\Models\Movie;
use App\Services\View;

class AdminMovieController
{
    public function index(): View
    {
        // $movies = (new Movie())->get();
        $movies = Movie::get();
        // dd($movies);
        // dd($movies[3]->title);
        return view('admin/movies/admin_index', compact('movies'))->setDocumentPath('admin/admin_document.php');
    }
}

?>