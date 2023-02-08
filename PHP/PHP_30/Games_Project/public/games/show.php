<?php

require __DIR__ . "/../../autoload/autoloader.php";

use src\Game;

$home = new Game;

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $home->show((int)$_GET['id']); // kastinimas/ cast
} else{
    http_response_code(404);
    die('NOT FOUND');
}
