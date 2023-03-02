<?php

require_once __DIR__ . "/Model.php";

class Movie extends Model
{
    public function showAll(): array
    {
        $sql = "SELECT * FROM `movie_rentals`.`movies` AS `m` WHERE `m`.`deleted_at` IS null";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();  
        return $stmt->fetchAll() ;
    }
    public function showSingle(): array
    {
        $sql = "SELECT * FROM `movie_rentals`.`movies` AS `m` WHERE `m`.`deleted_at` IS null LIMIT 1";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function insert(array $movie):void
    {
        $sql = "INSERT INTO `movie_rentals`.`movies`
                    (
                        `title`,
                        `description`,
                        `release_date`,
                        `runtime`,
                        `rating`,
                        `image`
                    )
                VALUES
                    (
                        :title,
                        :description,
                        :release_date,
                        :runtime,
                        :rating,
                        :image
                    )";

        $stmt = $this->connection->prepare($sql);
        try {
            $stmt->execute($movie);
            echo "Movie was added successfully.";
            // return $this->connection->lastInsertId();
        } catch (\PDOException $e) {
            echo "INSERT failed: " . $e->getMessage() . "\n";
        }
    }

    public function updateRecord(array $movie, int $id){

        $sql = "UPDATE `movie_rentals`.`movies`
                    SET 
                        `title` = :title,
                        `description` = :description,
                        `release_date` = :release_date,
                        `runtime` = :runtime,
                        `rating` = :rating,
                        `image` = :image
                WHERE `id` = :id";  

        $stmt = $this->connection->prepare($sql);
        
        try {
            $movie['id'] = $id;
            $stmt->execute($movie);
            echo "Movie was updated successfully.";
        } catch (\PDOException $e) {
            echo "UPDATE failed: " . $e->getMessage() . "\n";
        }
    }

    public function softDelete(int $id){
        $sql = "UPDATE `movie_rentals`.`movies`
                    SET 
                    `deleted_at` = NOW()
                 WHERE `id` = :id";
                       
        $stmt = $this->connection->prepare($sql);
        
        try {
            $stmt->execute(['id' => $id]);
            echo "Update was made successfully.";
        } catch (\PDOException $e) {
            echo "UPDATE failed: " . $e->getMessage() . "\n";
        }
    }

    public function hardDelete(int $id){
        $sql = "DELETE FROM `movie_rentals`.`movies` WHERE `id` = :id";
                       
        $stmt = $this->connection->prepare($sql);
        
        try {
            $stmt->execute(['id' => $id]);
            echo "Movie was successfully deleted.";
        } catch (\PDOException $e) {
            echo "DELETE failed: " . $e->getMessage() . "\n";
        }
    }
};

?>