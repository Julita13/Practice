-- Active: 1676911949936@@127.0.0.1@3306@games_and_more

ALTER TABLE `games_and_more`.`games` DROP COLUMN `score`;

ALTER TABLE `games_and_more`.`games` 
ADD COLUMN `score` INT UNSIGNED NULL AFTER `description`,
ADD COLUMN `review` TEXT NULL AFTER `score`;

-- su MODIFY keičiami tik stulpelio atributai, bet ne pavadinimas
ALTER TABLE `games_and_more`.`games` 
MODIFY `platforms` VARCHAR(500) NOT NULL,
MODIFY `score` FLOAT NULL;

-- SU CHANGE keičiamas ir pavadinimas, ir atributai. 
ALTER TABLE `games_and_more`.`games` 
CHANGE `platformos` `platforms` VARCHAR(500) NOT NULL,
CHANGE `įvertinimas` `score` FLOAT NULL;

-- RENAME keičiamas tik stulpelio pavadinimas
ALTER TABLE `games_and_more`.`games` 
RENAME COLUMN `platforms` TO `platformos`,
RENAME COLUMN `score` TO `scores`;
