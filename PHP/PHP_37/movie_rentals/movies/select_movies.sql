-- Active: 1676911949936@@127.0.0.1@3306@movie_rentals


-- a) paimti duomenis -  title, language, release_date, image.
SELECT
`title`,
`language`,
`release_date`,
`image`
FROM `movie_rentals`.`movies`;

--b) paimti tik tuos filmus, kurių trukmė mažiau nei 2val.
SELECT
`title`,
`language`,
`release_date`,
`image`,
`runtime`
FROM `movie_rentals`.`movies`
WHERE `runtime` < 120 ;


--c)  rezultato įrašai surikiuojami pagal release_date,  naujausi viršuje.
SELECT
`title`,
`language`,
`release_date`,
`image`,
`runtime`
FROM `movie_rentals`.`movies`
WHERE `runtime` < 120 
ORDER BY `release_date` DESC;