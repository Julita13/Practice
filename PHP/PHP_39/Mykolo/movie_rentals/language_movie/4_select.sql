-- Active: 1676911949936@@127.0.0.1@3306@movie_rentals

SELECT 
`movie`.`title`,
JSON_ARRAYAGG(`language`.`name`) AS `languages`
FROM `movie_rentals`.`movies` AS `movie`
LEFT JOIN `movie_rentals`.`language_movie` AS `movielanguage` ON `movie`.`id` = `movielanguage`.`movie_id`
LEFT JOIN `movie_rentals`.`languages` AS `language` ON `language`.`id` = `movielanguage`.`language_id`
GROUP BY `title`;

