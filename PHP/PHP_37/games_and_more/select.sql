-- Active: 1676911949936@@127.0.0.1@3306@games_and_more

SELECT
`name`,
`release_date`,
`developer_id`
FROM `games_and_more`.`games`;
SELECT
`games`.`name`,
`games`.`release_date`,
`devs`.`name` AS `developer`,
`devs`.`description`

FROM `games_and_more`.`games` AS `games`
JOIN `games_and_more`.`developers` AS `devs` ON `games`.`developer_id` = `devs`.`id`;