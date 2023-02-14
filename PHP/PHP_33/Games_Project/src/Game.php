<?php

namespace App;
use App\AbstractController; 
class Game extends AbstractController
{
    public string $databasePath = __DIR__ . "/../database/games.json";
    public function index(): void
    {
        $games = $this->database->records;
        // dump($games);
        view("games/index.php", compact("games"));
    }

    public function show(int $id): void
    {
        $game = $this->database->findRecord($id);

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
        $this->database->createRecord($data);
        header("Location: index.php");
    }

    public function edit(int $id): void
    {
        $game = $this->database->findRecord($id);

        if (!$game) {
            die('Not found');
        }
        // dd($game);
        view('games/edit.php', compact('game'));
    }

    public function update(array $game):void{
        //Validate input, store record and go back
        $this->database->updateRecord($game);
        header("Location: index.php");
    }

    public function delete(int $id):void{
        $this->database->deleteRecord($id);
        header("Location: index.php");
    }
}
