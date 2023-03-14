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

    public function create(): View {
        return view('admin/movies/admin_create')->setDocumentPath('admin/admin_document.php');
    }

    public function store(array $request) {
        // dd($request);
        Movie::create($request);
        header('Location: '. url('admin/movies/index.php'));
    }

    public function edit(int $id): View{
        $movie = Movie::find($id);
        return view('admin/movies/admin_edit', compact('movie'))->setDocumentPath('admin/admin_document.php');
    }

    public function update(array $request):void {

        // dd($request);
        $movie = Movie::find($request['id']);
        $movie->update($request);
        header('Location: '. url('admin/movies/index.php'));
    }

    public function delete(int $id):void{
        $movie = Movie::find($id);
        $movie->delete();
        header('Location: '. url('admin/movies/index.php'));
    }
}


?>