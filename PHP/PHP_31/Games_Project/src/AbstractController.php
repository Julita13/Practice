<?php

namespace App;
use App\Services\JsonDatabase;
abstract class AbstractController{
    public abstract function index();
    public function createRecord($post){
        $data = file_get_contents(__DIR__ . "/../database/games.json");
        $dataArr = json_decode($data, true);
        $index = array_column($dataArr, 'id');
        $index = max($index) + 1;
        if(isset($post)){
            $post['id'] = $index;
            $dataArr[] = $post;
        }
        $dataToJson = json_encode($dataArr);
        file_put_contents(__DIR__ . "/../database/games.json", $dataToJson);
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