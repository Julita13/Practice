<?php

// mysql -u root -p
//SELECT

// -- 1. paprastasis Select 
// SELECT 
// * 
// FROM `games_and_more`.`games`;

// -- 2. SELECT tik konkrečius stulpelių pavadinimus
// SELECT
// `name`,
// `release_date`
// FROM `games_and_more`.`games`;

// -- 3. SELECT tik konkrečius stulpelių pavadinimus, su alias'ais. ADD
// SELECT 
// `name` AS `title`,
// `release_date` AS `date`
// FROM `games_and_more`.`games`;

// -- 4. SELECT su WHERE sąlyga
// SELECT 
// `id`,
// `name`,
// `release_date`
// FROM `games_and_more`.`games`
// WHERE `id` >= 5;

// -- 5. SELECT su keliomis sąlygomis. Visada pradedama su WHERE ir pridedama AND ir OR

// SELECT
// `id`,
// `name`,
// `release_date`
// FROM `games_and_more`.`games`
// WHERE `id` >= 5 AND `id` <7 AND `release_date` > '2017-01-01';

// SELECT
// `id`,
// `name`,
// `release_date`
// FROM `games_and_more`.`games`
// WHERE `id` >= 5 AND `id` < 7 OR `release_date` > '2017-01-01';

// SELECT
// `id`,
// `name`,
// `release_date`
// FROM `games_and_more`.`games`
// WHERE (`id` >= 5 AND `id` < 7) OR `release_date` > '2017-01-01';


// -- 6. SELECT su ORDER BY and LIMIT
// SELECT
// `id`,
// `name`,
// `release_date`
// FROM `games_and_more`.`games`
// ORDER BY `name` ASC;


// SELECT
// `id`,
// `name`,
// `release_date`
// FROM `games_and_more`.`games`
// ORDER BY `release_date` DESC
// LIMIT 1; -- palieka tik vieną naujausią įrašą