-- Active: 1676911949936@@127.0.0.1@3306@movies


ALTER TABLE `movie_rentals`.`movies`
MODIFY `image` VARCHAR(1000) NOT NULL,
MODIFY `genre` VARCHAR(50) NOT NULL,
MODIFY `language` VARCHAR(50) NOT NULL,
MODIFY `country` VARCHAR(50) NOT NULL;