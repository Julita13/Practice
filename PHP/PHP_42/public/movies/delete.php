<?php
require_once __DIR__ . "/../../app/Models/Movie.php";
require_once __DIR__ . "/../../helpers.php";

$ourMovie = new Movie();
// $ourMovie->softDelete(30);
$ourMovie->hardDelete(31);


?>