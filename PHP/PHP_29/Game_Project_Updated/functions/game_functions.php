<?php
function getGames(string $file)
{
    $decodedData = json_decode(file_get_contents($file),true);
    return $decodedData;
}

function getGame($gameId): array
{
    $games = getGames(__DIR__ . '/../database/games.json');

    foreach ($games as $game) {
        if ($game['id'] == $gameId) {
            return $game;
        }
    }
    return [];
}
