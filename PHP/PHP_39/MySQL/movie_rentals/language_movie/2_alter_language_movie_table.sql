-- Active: 1676911949936@@127.0.0.1@3306@movie_rentals


UPDATE `movie_rentals`.`language_movie` AS `languagemovie`
LEFT JOIN `movie_rentals`.`languages` AS `language` ON `languagemovie`.`language_id` = `language`.`id`
SET `languagemovie`.`language_id` = `language`.`id`;

UPDATE `movie_rentals`.`language_movie` AS `languagemovie`
LEFT JOIN `movie_rentals`.`movies` AS `movie` ON `languagemovie`.`movie_id` = `movie`.`id`
SET `languagemovie`.`movie_id` = `movie`.`id`;

ALTER TABLE `movie_rentals`.`language_movie` -- lentelė, kurioje yra svetimas raktas
ADD CONSTRAINT `FK_language_id` -- Pavadinimas
FOREIGN KEY (`language_id`) -- stulpelis, kuris skolinasi informaciją (vadinamas svetimu raktu),
REFERENCES `languages`(`id`) -- nurodoma, iš kurios lentelės paimamos id vertės
ON UPDATE CASCADE ON DELETE RESTRICT; -- elgesys atnaujinant ir trinant REFERENCES lentelę

ALTER TABLE `movie_rentals`.`language_movie` -- lentelė, kurioje yra svetimas raktas
ADD CONSTRAINT `FK_movie_id` -- Pavadinimas
FOREIGN KEY (`movie_id`) -- stulpelis, kuris skolinasi informaciją (vadinamas svetimu raktu),
REFERENCES `movies`(`id`) -- nurodoma, iš kurios lentelės paimamos id vertės
ON UPDATE CASCADE ON DELETE RESTRICT; -- elgesys atnaujinant ir trinant REFERENCES lentelę