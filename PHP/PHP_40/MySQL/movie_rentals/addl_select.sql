-- Active: 1676911949936@@127.0.0.1@3306@movie_rentals

SELECT `movies`.`title`, (
        SELECT
            JSON_ARRAYAGG(`languages`.`name`) AS `Languages`
        FROM
            `movie_rentals`.`movies` AS `m`
            LEFT JOIN `movie_rentals`.`language_movie` AS `lan_m` ON `movies`.`id` = `lan_m`.`movie_id`
            LEFT JOIN `movie_rentals`.`languages` AS `languages` ON `languages`.`id` = `lan_m`.`language_id`
        WHERE
            `m`.`id` = `movies`.`id`
        GROUP BY
            `movies`.`id`
    ) AS `Language`, (
        SELECT
            GROUP_CONCAT(
                `actors`.`first_name`,
                ' ',
                `actors`.`last_name`
            ) AS `Full Name`
        FROM
            `movie_rentals`.`movies` AS `m`
            LEFT JOIN `movie_rentals`.`actor_movie` AS `a_m` ON `movies`.`id` = `a_m`.`movie_id`
            LEFT JOIN `movie_rentals`.`actors` AS `actors` ON `actors`.`id` = `a_m`.`actor_id`
        WHERE
            `m`.`id` = `movies`.`id`
        GROUP BY
            `movies`.`id`
    ) AS `Full Name`, (
        SELECT
            JSON_ARRAYAGG(`genres`.`name`) AS `Genre`
        FROM
            `movie_rentals`.`movies` AS `m`
            LEFT JOIN `movie_rentals`.`genre_movie` AS `gen_m` ON `movies`.`id` = `gen_m`.`movie_id`
            LEFT JOIN `movie_rentals`.`genres` AS `genres` ON `genres`.`id` = `gen_m`.`genre_id`
        WHERE
            `m`.`id` = `movies`.`id`
        GROUP BY
            `movies`.`id`
    ) AS `Genre`, (
        SELECT
            JSON_ARRAYAGG(`countrys`.`name`) AS `Countrys`
        FROM
            `movie_rentals`.`movies` AS `m`
            LEFT JOIN `movie_rentals`.`country_movie` AS `coun_m` ON `movies`.`id` = `coun_m`.`movie_id`
            LEFT JOIN `movie_rentals`.`countries` AS `countrys` ON `countrys`.`id` = `coun_m`.`country_id`
        WHERE
            `m`.`id` = `movies`.`id`
        GROUP BY
            `movies`.`id`
    ) AS `Countrys`
FROM
    `movie_rentals`.`movies` AS `movies`;