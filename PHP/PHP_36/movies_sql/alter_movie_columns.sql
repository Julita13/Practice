-- Active: 1676911949936@@127.0.0.1@3306@movies


ALTER TABLE `movies`.`movie`
ADD COLUMN `image` TEXT(1000) NOT NULL AFTER `rating`,
ADD COLUMN `genre` TEXT(50) NOT NULL AFTER `rating`,
ADD COLUMN `language` TEXT(50) NOT NULL AFTER `rating`,
ADD COLUMN `country` TEXT(255) NOT NULL AFTER `rating`;