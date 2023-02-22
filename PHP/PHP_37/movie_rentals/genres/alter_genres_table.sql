-- Active: 1676911949936@@127.0.0.1@3306@movie_rentals
UPDATE `movie_rentals`.`movies` AS `m`
LEFT JOIN `movie_rentals`.`genres` AS `g` ON `m`.`genre` = `g`.`name`
SET `m`.`genre` = `g`.`id`;

ALTER TABLE `movie_rentals`.`movies`
CHANGE `genre` `genre_id` INT UNSIGNED NOT NULL;