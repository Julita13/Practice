-- Active: 1676911949936@@127.0.0.1@3306@movie_rentals
SET FOREIGN_KEY_CHECKS = 0; -- leidžia ignoruoti visus lentelėje užsetintus foreign keys
DROP TABLE IF EXISTS `movie_rentals`.`movies`;

CREATE TABLE
    IF NOT EXISTS `movie_rentals`.`movies`(
        `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
        `title` VARCHAR(50) NOT NULL,
        `description` VARCHAR(255) NOT NULL,
        `release_date` DATE NOT NULL,
        `runtime` INT NOT NULL,
        `rating` VARCHAR(5) NOT NULL,
        `image` VARCHAR(1000) NOT NULL,
        `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        `deleted_at` TIMESTAMP NULL DEFAULT NULL
    );

-- G, PG, PG-13, R, NC-17.