-- Active: 1676911949936@@127.0.0.1@3306@movie_rentals
SELECT
`title`,
`language`,
`release_date`,
`image`,
`runtime`
FROM `movie_rentals`.`movies`
WHERE `runtime` < 120 
ORDER BY `release_date` DESC;

SELECT 
`movies`.`title`,
`movies`.`release_date`,
`genres`.`name` AS `genre`,
`genres`.`id` AS `genre_id`
FROM `movie_rentals`.`movies` AS `movies`
LEFT JOIN `movie_rentals`.`genres` AS `genres` ON `movies`.`genre_id` = `genres`.`id`;


--languages
SELECT 
`movie`.`title`,
JSON_ARRAYAGG(`language`.`name`) AS `Languages`
FROM `movie_rentals`.`movies` AS `movie`
LEFT JOIN `movie_rentals`.`language_movie` AS `movielanguage` ON `movie`.`id` = `movielanguage`.`movie_id`
LEFT JOIN `movie_rentals`.`languages` AS `language` ON `language`.`id` = `movielanguage`.`language_id`
GROUP BY `movie`.`title`;

-- actors
SELECT
`movie`.`title`,
JSON_ARRAYAGG(CONCAT(`actor`.`first_name`, " ", `actor`.`last_name`)) AS `Actors`
FROM `movie_rentals`.`movies` AS `movie`
LEFT JOIN `movie_rentals`.`actor_movie` AS `am` ON `movie`.`id` = `am`.`movie_id`
LEFT JOIN `movie_rentals`.`actors` AS `actor` ON `actor`.`id` = `am`.`actor_id`
GROUP BY `movie`.`title`;

-- countries
SELECT
`movie`.`title`,
JSON_ARRAYAGG(`country`.`name`) AS `Countries`
FROM `movie_rentals`.`movies` AS `movie`
LEFT JOIN `movie_rentals`.`country_movie` AS `cm` ON `movie`.`id` = `cm`.`movie_id`
LEFT JOIN `movie_rentals`.`countries` AS `country` ON `country`.`id` = `cm`.`country_id`
GROUP BY `movie`.`title`;

-- genres
SELECT `movie`.`title`,
JSON_ARRAYAGG(`genre`.`name`) AS `Genres`
FROM `movie_rentals`.`movies` AS `movie`
LEFT JOIN `movie_rentals`.`genre_movie` AS `gm` ON `movie`.`id` = `gm`.`movie_id`
LEFT JOIN `movie_rentals`.`genres` AS `genre` ON `genre`.`id` = `gm`.`genre_id`
GROUP BY `movie`.`title`;