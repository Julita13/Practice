-- Active: 1676911949936@@127.0.0.1@3306@movie_rentals

SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `movie_rentals`.`genre_movie`;
CREATE TABLE IF NOT EXISTS `movie_rentals`.`genre_movie`(
    `genre_id` INT UNSIGNED NOT NULL,
    `movie_id` INT UNSIGNED NOT NULL,

    CONSTRAINT `fk_genre_movie_genres` FOREIGN KEY (`genre_id`) REFERENCES `genres`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT,
    CONSTRAINT `fk_genre_movie_movies` FOREIGN KEY (`movie_id`) REFERENCES `movies`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT,
    CONSTRAINT `uc_genre_id_movie_id` UNIQUE KEY (`genre_id`, `movie_id`)
);