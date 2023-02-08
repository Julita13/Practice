<?php

namespace src;

use src\Services\Template;
use src\Services\JsonDatabase;
use src\Services\Helper;

class Game
{
    public function index(): void
    {
        $games = $this->all();
        $template = new Template('games/index.php', compact('games'));
        $template->render();        
    }

    public function show(int $id): void
    {
        $game = $this->getGameById($id);
        if (!$game) {
            die('Not found');
        }

        $template = new Template('games/show.php', compact('game'));
        $template->render();     
    }


    public function all(): array
    {
        $data = new JsonDatabase(__DIR__ . '/../database/games.json');
        return $data->getAll();
    }

    public function getGameById(int $id): array
    {
        $games = $this->all();
        $game = [];

        foreach ($games as $element) {
            if ($element['id'] === $id) {
                $game = $element;
                break; // sustabdome ciklą
            }
        }

        return $game;
    }
}

