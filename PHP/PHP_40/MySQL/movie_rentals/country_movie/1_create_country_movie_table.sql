-- Active: 1676911949936@@127.0.0.1@3306@movie_rentals

SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `movie_rentals`.`country_movie`;
CREATE TABLE IF NOT EXISTS `movie_rentals`.`country_movie`(
    `country_id` INT UNSIGNED NOT NULL,
    `movie_id` INT UNSIGNED NOT NULL,

    CONSTRAINT `fk_country_movie_countries` FOREIGN KEY (`country_id`) REFERENCES `countries`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT,
    CONSTRAINT `fk_country_movie_movies` FOREIGN KEY (`movie_id`) REFERENCES `movies`(`id`) ON UPDATE CASCADE ON DELETE RESTRICT,
    CONSTRAINT `uc_country_id_movie_id` UNIQUE KEY (`country_id`, `movie_id`)
);