-- Many-to-many sąryšis leis 1 filmui turėti ne vieną aktorių, žanrą ar kalbą.
-- Tokiam rezultatui pasiekti reikės ne 2 lentelių, kaip one-to-many atvejų, o 3.
-- Reikalinga tarpinė lentelė, vadinama pivot/relationship table.
-- Tarpinės lentelės  tikslas - nurodyti, kurie įrašai iš 2  lentelių yra susiję.

-- Šios užduoties tikslas - susieti 2 lenteles `movies` ir `languages` per tarpinę lentelę `language_movie` ir efektyviai ištraukti įrašus `movies`  kartu su visais jiems priklausančiais `languages` įrašais.

-- 1. Sukurti `movie_rentals`.`languages`

-- CREATE TABLE IF NOT EXISTS `movie_rentals`.`languages`(
--     `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
--     `name` VARCHAR(50) NOT NULL,
--     `abbr` VARCHAR(2) NOT NULL,
--     `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
--     `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
--     `deleted_at` TIMESTAMP NULL DEFAULT NULL
-- );

-- 2. Užpildyti `movie_rentals`.`languages`:

-- INSERT INTO `movie_rentals`.`languages`
-- (`name`,`abbr`)
-- VALUES
-- ('english','en'),
-- ('german','de'),
-- ('spanish', 'es'),
-- ('lithuanian', 'lt'),
-- ('french', 'fr'),
-- ('japanese', 'jp');

-- 3. Parašyti SQL tarpinei lentelei `movie_rentals`.`language_movie` sukurti.

-- Šioje lentelėje turi būti tik 2 stulpeliai:
--     `language_id` skaičius, ne minusas, ne null
--     `movie_id`  skaičius, ne minusas, ne null.

-- Susaistyti šios lentelės svetimus raktus:
--     `language_id` su `languages`
--     `movie_id` su `movies.`

-- Saitus galima uždėti CREATE operacijos metu arba po to, su ALTER operacija.

-- movie_id - tai filmas, language_id - tai kalba.
-- Vienas filmas gali turėti daug kalbų, viena kalba - daug filmų.

-- 4. INSERT komanda įveskite duomenis į tarpinę lentelę `movie_rentals`.`language_movie`
-- pvz.: (1,1),(3,1),(1,2),(5,2),(2,3),(1,3),(4,3);

-- Negali būtį identiškų svetimų raktų verčių porų.

-- 5. Parašyti SELECT užklausą su dviem JOIN, kuria sujungiamos lentelės `movies`->`language_movie`->`language`.

-- Sujungimui naudoti 2 JOIN per `id` ,`movie_id`, `language_id`

-- SELECT turi grąžinti filmo pavadinimą ir kalbas
-- SELECT užklausą reikia grupuoti su GROUP BY pagal filmo `title`. - rašoma užklausos gale
-- SELECT kalbos stulpelį agreguoti su JSON_ARRAYAGG() funkciją. - rašomas kaip vienas iš atrenkamų stulpelių, padaromas masyvas
