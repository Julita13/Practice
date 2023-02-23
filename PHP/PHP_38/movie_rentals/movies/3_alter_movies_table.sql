-- Active: 1676911949936@@127.0.0.1@3306@movie_rentals

ALTER TABLE `movie_rentals`.`movies`
ADD COLUMN `image` VARCHAR(1000) NOT NULL AFTER `rating`,
ADD COLUMN `genre` VARCHAR(50) NOT NULL AFTER `image`,
ADD COLUMN `language` VARCHAR(50) NOT NULL AFTER `genre`,
ADD COLUMN `country` VARCHAR(255) NOT NULL AFTER `language`;

ALTER TABLE `movie_rentals`.`movies`
MODIFY `image` VARCHAR(1000) NOT NULL,
MODIFY `genre` VARCHAR(50) NOT NULL,
MODIFY `language` VARCHAR(50) NOT NULL,
MODIFY `country` VARCHAR(50) NOT NULL;

-- update movie genre to ids
UPDATE `movie_rentals`.`movies` AS `m`
LEFT JOIN `movie_rentals`.`genres` AS `g` ON `m`.`genre` = `g`.`name`
SET `m`.`genre` = `g`.`id`;

-- change movies genre column name to genre_id
ALTER TABLE `movie_rentals`.`movies`
CHANGE `genre` `genre_id` INT UNSIGNED NOT NULL;


-- NAUJAS TASKAS
-- 1 
ALTER TABLE `movie_rentals`.`movies`
ADD COLUMN `actor_id` INT UNSIGNED NULL AFTER `country`;

-- 2
UPDATE `movie_rentals`.`movies` AS `m`
LEFT JOIN `movie_rentals`.`actors` AS `a` ON `m`.`actor_id` = `a`.`id`
SET `m`.`actor_id` = `a`.`id`;

-- ALTER TABLE `movie_rentals`.`movies`
-- DROP CONSTRAINT `FK_genre`;

-- 4
ALTER TABLE `movie_rentals`.`movies` -- lentelė, kurioje yra svetimas raktas
ADD CONSTRAINT `FK_actors_id` -- Pavadinimas
FOREIGN KEY (`actor_id`) -- stulpelis, kuris skolinasi informaciją (vadinamas svetimu raktu),
REFERENCES `actors`(`id`) -- nurodoma, iš kurios lentelės paimamos id vertės
ON UPDATE CASCADE ON DELETE RESTRICT; -- elgesys atnaujinant ir trinant REFERENCES lentelę

ALTER TABLE `movie_rentals`.`movies` -- lentelė, kurioje yra svetimas raktas
ADD CONSTRAINT `FK_genre_id` -- Pavadinimas
FOREIGN KEY (`genre_id`) -- stulpelis, kuris skolinasi informaciją (vadinamas svetimu raktu),
REFERENCES `genres`(`id`) -- nurodoma, iš kurios lentelės paimamos id vertės
ON UPDATE CASCADE ON DELETE RESTRICT; -- elgesys atnaujinant ir trinant REFERENCES lentelę