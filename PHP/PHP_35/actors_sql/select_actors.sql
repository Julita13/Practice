-- Active: 1676911949936@@127.0.0.1@3306@movie_rentals

--a)
SELECT
`id`,
`first_name`,
`last_name`,
`date_of_birth`
FROM `movie_rentals`.`actors`;

--b)
SELECT
`id` AS `ID`,
`first_name` AS `First Name`,
`last_name` AS `Last Name`,
`date_of_birth`
FROM `movie_rentals`.`actors`;

--c)
SELECT
`id`,
`first_name`,
`last_name`,
`date_of_birth`
FROM `movie_rentals`.`actors`
WHERE `date_of_birth` > '1950-01-01';

--d)
SELECT
`id`,
`first_name`,
`last_name`,
`date_of_birth`
FROM `movie_rentals`.`actors`
ORDER BY `last_name` DESC;

--e)
SELECT
`id`,
`first_name`,
`last_name`,
`date_of_birth`
FROM `movie_rentals`.`actors`
ORDER BY `last_name` DESC LIMIT 3;