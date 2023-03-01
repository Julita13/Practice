<?php
//https://phpdelusions.net/pdo#why
require_once __DIR__ . '/Connection.php';
require_once __DIR__ . '/helpers.php';

$connection = (new Connection())->getConnection();
dump($connection);

// Kaip rašyti PDO užklausas
// Yra 2 būdai atlikti PDO užklausą:

// PDO::query() - kai užklausoje nėra kintamųjų
// PDO::prepare() ir execute() - jei naudojamoas bent vienas kintamasis viduje

// Abiem atvejais reikia užbaigti su fetch() ar fetchAll funkcija, kuri paima duomenis

// 1. Pavyzdys be kintamųjų: 

$movie=$connection->query('SELECT * FROM `movie_rentals`.`movies`')->fetchAll();
// dump($movie);

// 2. Pavyzdis su kintamaisiais: 
// Kaip rašyti negalima!!!! :: 

$title = "Titanic";
// // $title = "' or 1=1--"; // injection
// $titanic = $connection->query("SELECT * FROM `movie_rentals`.`movies` AS `m` WHERE `m`.`title` = '$title'")->fetchAll();
// dump($titanic);

// 2. Pavyzdis su kintamaisiais: 
// Teisingas sql, naudojant placeholerius

// su :named placeholderiais

// $sql = "SELECT 
//           * 
//         FROM `movie_rentals`.`movies` AS `m` 
//         WHERE `m`.`title` = :title";
// $stmt = $connection->prepare($sql);
// $stmt->execute([
//   'title' => 'Titanic'
// ]);
// $titanic = $stmt->fetch();

// dump($titanic);


// su ? placeholderiais


// $sql = "SELECT 
//           * 
//         FROM `movie_rentals`.`movies` AS `m` 
//         WHERE `m`.`title` = ? AND `m`.`release_date` = ?";
// $stmt = $connection->prepare($sql);
// $stmt->execute([
//   'Titanic',
//   '1977-11-01'
// ]);
// $inception = $stmt->fetch();

// dump($inception);


// function getAllMovies(\PDO $connection):array
// {
//   return $connection->query('SELECT * FROM `movie_rentals`.`movies`')->fetchAll();
// }

// dump(getAllMovies($connection));

// function getSingleMovie(\PDO $connection, int $id): array
// {
//   $sql = "SELECT * FROM `movie_rentals`.`movies` WHERE `id` = ?";
//   $stmt = $connection->prepare($sql);
//   $stmt->execute([$id]);

//   return $stmt->fetch();
// }

// dump(getSingleMovie($connection, 3));
