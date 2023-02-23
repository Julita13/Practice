-- Active: 1676911949936@@127.0.0.1@3306@movie_rentals
SELECT
`movies`.`title`,
`movies`.`release_date`,
`genre`.`name` AS `genre`

FROM `movie_rentals`.`movies` AS `movies`
JOIN `movie_rentals`.`genres` AS `genre` ON `movies`.`genre_id` = `genre`.`id`;

SELECT
`title`,
`release_date`
FROM `movie_rentals`.`movies`