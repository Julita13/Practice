<?php

namespace src;
use src\Services\JsonData;
use src\Services\Helper;

class Game {
    public function index() {
        $gameJson = new JsonData(__DIR__ . '/../database/games.json');
        $games = $gameJson->getAll();
        // (new Helper)->dump($games);
        include_once __DIR__ . "/../templates/games/index.php";
    }
}