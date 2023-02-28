-- Active: 1676911949936@@127.0.0.1@3306@movie_rentals

--  SUBQUERY - SUBUŽKLAUSA
-- Tai užklausos, kurios naudojamos kitos užklausos metu. 

SELECT 
*
FROM `movie_rentals`.`movies` AS `movies`
WHERE `movies`.`id` IN (
    SELECT 
    `am`.`movie_id`
    FROM `movie_rentals`.`actor_movie` AS `am`
    WHERE `am`.`actor_id` = 3
);

-- SUBQUERY 1 TAS PATS KAS: ADD

SELECT 
*
FROM `movie_rentals`.`movies` AS `movies`
JOIN `movie_rentals`.`actor_movie` AS `am` ON `movies`.`id` = `am`.`movie_id`
WHERE `am`.`actor_id` = 3;

 
 -- 1. 
-- Parašyti select užklausą iš games lentelės, kuri
-- naudodama subužklausas, paimtų  actors, genres, languages ir countries
-- Lentelių informacija atvaizduojama kaip stulpelis su json objektais

SELECT 
`movies`.`id` AS `ID`,
`movies`.`title` AS `Movie`,
`movies`.`release_date` as `Release date`,
(   -- Actors:
    SELECT 
    JSON_ARRAYAGG(
        JSON_OBJECT(
            'id',`actors`.`id`,
            'first_ name', `actors`.`first_name`,
            'last_ name', `actors`.`last_name`,
            'date_of_birth', `actors`.`date_of_birth`,
            'created_at', `actors`.`created_at`,
            'updated_at', `actors`.`updated_at`,
            'deleted_at', `actors`.`deleted_at`
        )
    ) 
    FROM `movie_rentals`.`actor_movie` AS `am`
    JOIN `movie_rentals`.`actors` ON `actors`.`id` = `am`.`actor_id`
    WHERE `am`.`movie_id` = `movies`.`id`
    GROUP BY `am`.`movie_id`
) AS `Actors`,
(
    -- genres
    SELECT 
    JSON_ARRAYAGG(
        JSON_OBJECT(
            'id', `genres`.`id`,
            'name', `genres`.`name`,
            'description', `genres`.`description`,
            'created_at', `genres`.`created_at`,
            'updated_at', `genres`.`updated_at`,
            'deleted_at', `genres`.`deleted_at`
        )
    ) 
    FROM `movie_rentals`.`genre_movie` AS `gm`
    JOIN `movie_rentals`.`genres` ON `genres`.`id` = `gm`.`genre_id`
    WHERE `gm`.`movie_id` = `movies`.`id`
    GROUP BY `gm`.`movie_id`
) AS `Genres`,
(
    -- languages
    SELECT 
    JSON_ARRAYAGG(
        JSON_OBJECT(
            'id', `languages`.`id`,
            'name', `languages`.`name`,
            'abbr', `languages`.`abbr`,
            'created_at', `languages`.`created_at`,
            'updated_at', `languages`.`updated_at`,
            'deleted_at', `languages`.`deleted_at`
        )
    ) 
    FROM `movie_rentals`.`language_movie` AS `lm`
    JOIN `movie_rentals`.`languages` ON `languages`.`id` = `lm`.`language_id`
    WHERE `lm`.`movie_id` = `movies`.`id`
    GROUP BY `lm`.`movie_id`
) AS `Languages`,
(
    -- countries
    SELECT 
    JSON_ARRAYAGG(
        JSON_OBJECT(
            'id', `countries`.`id`,
            'name', `countries`.`name`,
            'created_at', `countries`.`created_at`,
            'updated_at', `countries`.`updated_at`,
            'deleted_at', `countries`.`deleted_at`
        )
    ) 
    FROM `movie_rentals`.`country_movie` AS `cm`
    JOIN `movie_rentals`.`countries` ON `countries`.`id` = `cm`.`country_id`
    WHERE `cm`.`movie_id` = `movies`.`id`
    GROUP BY `cm`.`movie_id`
) AS `Countries`

FROM `movie_rentals`.`movies` AS `movies`;


