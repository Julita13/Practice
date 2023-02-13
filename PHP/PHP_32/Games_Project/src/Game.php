<?php

namespace App;
use App\AbstractController; 
class Game extends AbstractController
{
    public function index(): void
    {
        $games = $this->all();
        // dump($games);
        view("games/index.php", compact("games"));
    }

    public function show(int $id): void
    {
        $game = $this->getGameById($id);

        if (!$game) {
            die('Not found');
        }

        view('games/show.php', compact('game'));
    }
    public function create(){
        view('games/create.php');
    }
    public function store(array $data){
        //Validate input, store record and go back
        $this->createRecord($data);
        header("Location: index.php");
    }

    public function edit(int $id): void
    {
        $game = $this->getGameById($id);

        if (!$game) {
            die('Not found');
        }
        // dd($game);
        view('games/edit.php', compact('game'));
    }

    public function update(array $game):void{
        //Validate input, store record and go back
        $this->updateRecord($game);
        header("Location: index.php");
    }
}
