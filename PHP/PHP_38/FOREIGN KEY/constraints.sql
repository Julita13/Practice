

-- ADD foreign key contraint 
-- Jeigu 2 lentelės dalinasi duomenimis ir vienos duomenys priklauso nuo kitos duomenų, 
-- tokią priklausomybę reikia įprasminti programiškai. T.y. - uždėti saitą, kad atnaujinant ar trinant
-- duomenis vienoje lentelėje nebūtų pažeidžiama informacija kitoje. 

-- Tam naudojamas foreign key constraint.
-- FKEY susaisto 2 stulpelius skirtingose lentelėse. 
-- Leidžia nustatyti elgesį atnaujinant ir trinant susaistytą laukelį.

-- FKEY galima uždėti lentelės kūrimo metu
-- arba naudojant ALTER

ALTER TABLE `tableName` -- lentelė, kurioje yra svetimas raktas
ADD CONSTRAINT `FK_NAME` -- Pavadinimas
FOREIGN KEY (`some_id`) -- stulpelis, kuris skolinasi informaciją (vadinamas svetimu raktu),
REFERENCES `referenceTable`(`id`) -- nurodoma, iš kurios lentelės paimamos id vertės
ON UPDATE CASCADE ON DELETE RESTRICT; -- elgesys atnaujinant ir trinant REFERENCES lentelę