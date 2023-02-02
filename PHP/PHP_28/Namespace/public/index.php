<?php
require __DIR__ . "/../autoload/autoloader.php";
// require __DIR__ . "/../src/Movie.php";
// require __DIR__ . "/../test/Movie.php";

//echo(new Movie("Mad Max"))->getMovie();
// viršuje - tas pats užrašymas, ta pati vertė.
//Namespace'as keičia klasės pavadinimą - mes jį keičiame į FQCN pavadinimą. 

use src\Movie as RealMovie;
use src\test\Movie;
use src\test\User; 


$realMovie = new RealMovie("The Silence of Lambs");
$myMovie2 = new Movie("Inception");
$user = new User("Julita");

echo($realMovie->getMovie()). "<br>";
echo($myMovie2->getMovie());