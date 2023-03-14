<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use App\Controllers\MovieController;
use App\Services\View;

if (!(isset($_GET['id']) || is_numeric($_GET['id']))) {
    http_response_code(404);
    die('NOT FOUND');
}

$movie = new MovieController();
$result = $movie->show((int)$_GET['id']);

if ($result instanceof View) {
    echo $result->render();
}

?>