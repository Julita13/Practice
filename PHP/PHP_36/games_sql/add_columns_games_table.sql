-- Active: 1676911949936@@127.0.0.1@3306@games_and_more

ALTER TABLE `games_and_more`.`games` DROP COLUMN `score`;

ALTER TABLE `games_and_more`.`games` 
ADD COLUMN `score` INT UNSIGNED NULL AFTER `description`,
ADD COLUMN `review` TEXT NULL AFTER `score`;