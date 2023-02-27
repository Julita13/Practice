-- Active: 1676911949936@@127.0.0.1@3306@movie_rentals


DROP TABLE IF EXISTS `movie_rentals`.`actor_movie`;
CREATE TABLE IF NOT EXISTS `movie_rentals`.`actor_movie`(
    `actor_id` INT UNSIGNED NOT NULL,
    `movie_id` INT UNSIGNED NOT NULL,

    CONSTRAINT `fk_actor_movie_actor` FOREIGN KEY (`actor_id`) REFERENCES `actors`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT,
    CONSTRAINT `fk_actor_movie_movies` FOREIGN KEY (`movie_id`) REFERENCES `movies`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT,
    CONSTRAINT `uc_actor_id_movie_id` UNIQUE KEY (`actor_id`, `movie_id`)
);