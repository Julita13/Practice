-- Active: 1676911949936@@127.0.0.1@3306@movie_rentals

-- LENTELĖ UŽPILDOMA FAKE DUOMENIMIS DEMONSTRAVIMO TIKSLAIS. 
-- all similarities are purely coincidental :)
INSERT INTO `movie_rentals`.`USERS`(
    `first_name`,
    `last_name`,
    `date_of_birth`,
    `workplace_id`
)
VALUES (
    'Julita',
    'Mažuolytė-Mečkovska',
    '1989-05-13',
    1
    ),
(
    'Eglė',
    'Norkutė',
    '1987-02-12',
    3
    ),
(
    'Edita',
    'Klusienė',
    '1986-03-30',
    1
    ),
(
    'Jevgenij',
    'Klopov',
    '1990-05-09',
    5
),
(
    'Andrius',
    'Agafonovas',
    '1984-11-01',
    5
);


SELECT 
CONCAT(`user`.`first_name`, " ", `user`.`last_name`) AS `User`,
`workplace`.`name` AS `Workplace`
FROM `movie_rentals`.`USERS` AS `user`
LEFT JOIN `movie_rentals`.`WORKPLACES` AS `workplace` ON `user`.`workplace_id` = `workplace`.`id`;
