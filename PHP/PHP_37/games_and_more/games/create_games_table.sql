-- Active: 1676911949936@@127.0.0.1@3306@games_and_more
DROP TABLE IF EXISTS `games_and_more`.`games`;
CREATE TABLE IF NOT EXISTS `games_and_more`.`games`(
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `name` VARCHAR(50) NOT NULL,
    `release_date` DATE NOT NULL,
    `developer` VARCHAR(50) NOT NULL,
    `genre` VARCHAR(50) NOT NULL,
    `image` VARCHAR(1000) NOT NULL,
    `platforms` VARCHAR(50) NOT NULL,
    `description_short` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    -- negali būti tuščias, bet nepadavus vertės, bus įrašyta defaultinė vertė (dabartinis laikas)
    --dabartinis laikas automatiškai
    `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    -- sukūrimo metu dabartinis laikas,atnaujinimo metu - dabartinis laikas
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `deleted_at` TIMESTAMP NULL DEFAULT NULL
);

