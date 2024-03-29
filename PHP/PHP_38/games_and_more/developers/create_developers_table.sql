-- Active: 1676911949936@@127.0.0.1@3306@games_and_more
DROP TABLE IF EXISTS `games_and_more`.`developers`;
CREATE TABLE IF NOT EXISTS `games_and_more`.`developers`(
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `description` VARCHAR(255) NULL,
    `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `deleted_at` TIMESTAMP NULL DEFAULT NULL
);

-- SELECT `developer` FROM `games_and_more`.`games`;