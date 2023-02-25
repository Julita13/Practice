-- Active: 1676911955202@@127.0.0.1@3306@games_and_more

-- ADD foreign key contraint
-- Jeigu 2 lentelės dalinasi duomenimis ir vienos duomenys priklauso nuo kitos duomenų,
-- tokią priklausomybę reikia įprasminti programiškai. T.y. - uždėti saitą, kad atnaujinant ar trinant
-- duomenis vienoje lentelėje nebūtų pažeidžiama informacija kitoje.

-- Tam naudojamas foreign key constraint.
-- FKEY susaisto 2 stulpelius skirtingose lentelėse. 
-- Leidžia nustatyti elgesį atnaujinant ir trinant susaistytą laukelį.

-- FKEY galima uždėti lentelės kūrimo metu
-- arba naudojant ALTER.

ALTER TABLE `tableName` -- Lentelė, kurioje yra svetimas raktas
ADD CONSTRAINT `FK_NAME`-- Pavadinimas
FOREIGN KEY (`some_id`) -- stulpelis, kuris skolinasi informaciją (vadinamas svetimų raktu, nes tai id iš kitos lentelės)
REFERENCES `referenceTable`(`id`) -- nurodoma, iš kurios lentelęs paimamos id vertės
ON UPDATE CASCADE ON DELETE RESTRICT;-- elgesys atnaujinant ir trinant REFERENCES lentelę 

-- ON UPDATE 
    -- RESTRICT - neleis updatint `actor`.`id`
    -- CASCADE - atnaujinus `actor`.`id` atsinaujins ir `movies`.`actor_id`
    -- SET NULL -  atnaujinus `actor`.`id` atitinkamas `movies`.`actor_id` uždedamas null
-- ON DELETE 
    -- RESTRICT - neleis trinti `actor` įrašo, jei egzistuoja susietas `movies`.`actor_id`.
    -- CASCADE - ištrynus `actor` bus ištrinami ir susieti įrašai `movies` lentelėje - RETAI NAUDOJAMAS
    -- SET NULL -  ištrynus `actor` atitinkamas `movies`.`actor_id` uždedamas null

-- Dažniausiai naudojamį ON UPDATE CASCADE ON DELETE RESTRIC.