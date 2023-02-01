<?php

// require_once __DIR__ . "/../src/Game.php";
// require_once __DIR__ . "/../src/test/Game.php";

// use src\Game as Game1;
// use src\test\Game as Game2;

// $game = new Game1('The Witcher');
// $game2 = new Game2('The Witcher 3');

spl_autoload_register(function ($className) {
    //    require __DIR__ . "\\..\\$className.php";
    if ($className === 'MyProject\Game') {
        require __DIR__ . '/../src/Game.php';
    }

    if ($className === 'MyProject\test\Game') {
        require __DIR__ . '/../src/test/Game.php';
    }
});

// $game = new src\Game('The Witcher');
// $game2 = new src\test\Game('The Witcher 3');

$game = new MyProject\Game('The Witcher');
$game2 = new MyProject\test\Game('The Witcher 3');

print_r($game->getTitle());
print_r($game2->getTitle());