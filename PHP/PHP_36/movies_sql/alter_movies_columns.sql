-- Active: 1676911949936@@127.0.0.1@3306@movies

ALTER TABLE `movie_rentals`.`movies`
ADD COLUMN `image` VARCHAR(1000) NOT NULL AFTER `rating`,
ADD COLUMN `genre` VARCHAR(50) NOT NULL AFTER `image`,
ADD COLUMN `language` VARCHAR(50) NOT NULL AFTER `genre`,
ADD COLUMN `country` VARCHAR(255) NOT NULL AFTER `language`;