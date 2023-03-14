<?php 
require_once __DIR__ . "/../../../vendor/autoload.php";

use App\Controllers\Admin\AdminMovieController;
use App\Services\View;

$movie = new AdminMovieController();
$result = $movie->index();

if($result instanceof View){
    echo $result->render();
}

?>