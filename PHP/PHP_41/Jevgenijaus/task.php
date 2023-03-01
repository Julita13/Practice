<?php
require_once(__DIR__."/Connection.php");
require_once __DIR__ . "/helpers.php";
$connection = (new Connection())->getConnection();
$movie = [
    "title" => 'Indiana Jones and the Raiders of the Lost Ark',
    "description" => 'Titanic is a 1997 American epic romance and disaster film directed, written, produced, and co-edited by James Cameron.',
    "release_date" => '1981-06-12',
    "runtime" => 115,
    "rating" => 'PG',
    "image" => 'https://m.media-amazon.com/images/I/51K8ouYrHeL._AC_UF894,1000_QL80_.jpg'
];

class Movies
{
    public function showAll(\PDO $connection): array
    {
        return $connection->query('SELECT * FROM `movie_rentals`.`movies`')->fetchAll();
    }
    public function showSingl(\PDO $connection, int $id): array|null
    {
        $sql = 'SELECT * FROM `movie_rentals`.`movies` WHERE `id` = ? LIMIT 1';
        $stmt = $connection->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch() ?: null;
    }
    public function insert(\PDO $connection, $data): void
    {
        $pdoQuery = "INSERT INTO `movies` (`title`, `description`, `release_date`, `runtime`, `rating`, `image`) 
        VALUES (:title, :description, :release_date, :runtime, :rating, :image)";
        $pdoResult = $connection->prepare($pdoQuery);
        $pdoExec = $pdoResult->execute($data);
        if ($pdoExec) {
            echo 'Data inserted succsesfuy';

        } else {
            echo 'Data did`t inserted';
        }
    }
}
// dd((new Movies())->showAll($connection));
//((new Movies())->showSingl($connection, 5));
// (new Movies())->insert($connection, $movie);
?>
