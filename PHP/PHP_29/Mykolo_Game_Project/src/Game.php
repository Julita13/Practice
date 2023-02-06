<?php

namespace src;

use src\Services\JsonDatabase;
use src\Services\Helper;

class Game
{
    public function index()
    {
        $games = $this->all();
        // (new Helper)->dump($games);    
        include __DIR__ . '/../templates/games/index.php';
    }

    public function all()
    {
        $data = new JsonDatabase(__DIR__  . '/../database/games.json');
        return $data->getAll();
    }
}