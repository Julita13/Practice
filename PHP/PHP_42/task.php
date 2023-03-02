<?php 

// 1. Sukurti failus public/movies/update.php, public/movies/delete.php.  

// 2  Klasėje Movie sukurti metodą updateRecord(). Metodas priima asociacinį masyvą su duomenimis ir įrašo id.
//    Iškvietus šį metodą, naudojant PDO, atliekamas atnaujinimas pagal pateiktus duomenis įrašui, surastam pagal id. 

// 3. Sukurti metodą softDelete(), kuris turi 1 argumentą - int $id. Iškvietus šį metodą, naudojant PDO, id
//    ir SQL funkciją NOW() atliekamas atnaujinimas, kurio tikslas - užpildyti laukelį deleted_at. 

// 4. Sukurti metodą hardDelete(), kuris turi 1 argumentą - int $id. Iškvietus šį metodą, naudojant PDO ir id,
//    ištrinamas įrašas iš duomenų bazės.
          
// 5. Pekeisti metodus showAll() ir showSingle(), kad grąžintu tuos filmus, kurie neturi užpildyto deleted_at. 

// 6. Išbandyti visus metodus.

// Duomenys updatui:

// 'Indiana Jones and the Raiders of the Lost Ark',
// 'In 1936, archaeologist and adventurer Indiana Jones is hired by the U.S. government to find the Ark of the Covenant before the Nazis can obtain its awesome powers.',
// '1981-06-12',
// 115,
// 'PG',
// 'https://www.imdb.com/title/tt0082971/mediaviewer/rm2091520257/?ref_=tt_ov_i'


?>