<?php
require_once __DIR__ . "/../../helpers.php";
require_once __DIR__ . "/../../app/Models/Movie.php";

$ourMovie = new Movie();
// $indiana = [
//     "title" => 'Indiana Jones and the Raiders of the Lost Ark',
//     "description" => 'Titanic is a 1997 American epic romance and disaster film directed, written, produced, and co-edited by James Cameron.',
//     "release_date" => '1981-06-12',
//     "runtime" => 115,
//     "rating" => 'PG',
//     "image" => 'https://m.media-amazon.com/images/I/51K8ouYrHeL._AC_UF894,1000_QL80_.jpg'
// ];

// $movieId = (new Movie())->insert($indiana);


dd($ourMovie->showSingle());
// dd($ourMovie->showAll());
?>
