<?php
require_once __DIR__ . "/Connection.php";
require_once __DIR__ . "/helpers.php";
class Movie
{
    public function showAll(\PDO $connection): array
    {
        return $connection->query('SELECT * FROM `movie_rentals`.`movies`')->fetchAll();
    }

    public function showSingle(\PDO $connection, int $id): array
    {
        $sql = "SELECT * FROM `movie_rentals`.`movies` WHERE `id` = ?";
        $stmt = $connection->prepare($sql);
        $stmt->execute([$id]);  

        return $stmt->fetch() ?: null;
    }
    public function insert($connection, $movie)
    {
        $sql = "INSERT INTO movies 
            (title, description, release_date, runtime, rating, image) 
        VALUES 
            (:title, :description, :release_date, :runtime, :rating, :image)";
        $stmt = $connection->prepare($sql);
        $stmt->execute($movie);
    }
}


$connection = (new Connection())->getConnection();
$movie = new Movie();
// dd($movie->showAll($connection));
// dd($movie->showSingle($connection, 2));
// $movie->insert($connection, [
//     'title' => 'Indiana Jones and the Raiders of the Lost Ark',
//     'description' => 'Titanic is a 1997 American epic romance and disaster film directed, written, produced, and co-edited by James Cameron.',
//     'release_date' => '1981-06-12',
//     'runtime' => 115,
//     'rating' =>'PG',
//     'image' => 'https://m.media-amazon.com/images/I/51K8ouYrHeL._AC_UF894,1000_QL80_.jpg'
// ]);
// dd($movie->showAll($connection));
// dump($movie->showSingle($connection, 2));


