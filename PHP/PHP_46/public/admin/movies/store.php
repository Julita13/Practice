<?php 
require_once __DIR__ . "/../../../vendor/autoload.php";

use App\Controllers\Admin\AdminMovieController;

// dd($_SERVER['REQUEST_METHOD']);
if($_SERVER['REQUEST_METHOD'] !== "POST") {
    http_response_code(405);
    exit("405 METHOD NOT ALLOWED");
}

$movie = new AdminMovieController();
$result = $movie->store($_POST);


?>