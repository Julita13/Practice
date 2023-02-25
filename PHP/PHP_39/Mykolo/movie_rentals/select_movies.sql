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