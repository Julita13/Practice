<?php 
require_once __DIR__ . "/../../vendor/autoload.php";

use App\Controllers\MovieController;
use App\Services\View;

$movie = new MovieController();
$result = $movie->index();

if($result instanceof View){
    echo $result->render();
}

?>