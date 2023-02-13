<?php

require __DIR__ . "/../../vendor/autoload.php";

use App\Game;

$game = new Game;

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $game->show((int)$_GET['id']); // kastinimas/cast į int
} else {
    http_response_code(404);
    die('NOT FOUND');
}
