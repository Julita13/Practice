<?php
//Senasis būdas: 
// require_once __DIR__ . "/../src/Game.php";
// require_once __DIR__ . "/../src/test/Game.php";


// use src\Game as Game1;
// use src\test\Game as Game2;

// $game = new Game1("GTA 5");
// $game2 = new Game2("GTA 5");


spl_autoload_register(function ($className) {
    require __DIR__ . "\\..\\$className.php";
    die();
});




$game = new src\Game("GTA 5");
$game2 = new src\test\Game("GTA 5");



print_r($game->getTitle()); 
print_r($game2->getTitle()); 