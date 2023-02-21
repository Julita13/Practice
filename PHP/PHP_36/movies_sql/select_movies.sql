-- Active: 1676911949936@@127.0.0.1@3306@movies


-- a) paimti duomenis -  title, language, release_date, image.
SELECT
`title`,
`language`,
`release_date`,
`image`
FROM `movies`.`movie`;

--b) paimti tik tuos filmus, kurių trukmė mažiau nei 2val.
SELECT
`title`,
`language`,
`release_date`,
`image`,
`runtime`
FROM `movies`.`movie`
WHERE `runtime` < 120 ;


--c)  rezultato įrašai surikiuojami pagal release_date,  naujausi viršuje.
SELECT
`title`,
`language`,
`release_date`,
`image`
FROM `movies`.`movie`
ORDER BY `release_date` DESC;