<?php

//  1. Sukurti klasę Movie.

//  2  Sukurti metodą showAll(). Iškvietus šį metodą, naudojant PDO, grąžinami visi 
//  lentelės movies duomenys masyvo formatu. 

//  3. Sukurti metodą showSingle(). Jis turi 1 argumentą - int $id. Iškvietus šį metodą, naudojant PDO,
//  grąžinamas 1 konretus lentelė movies įrašas masyvo formatu. 

//  3. Sukurti metodą insert(), kuris priima masyvą duomenų masyvą $movie.
//     insert() metodas, naudojant PDO objektą, įkelia perduotus $movies duomenis į
//     `movie_rentals`.`movies` lentelę. Duomenis, kurie perduodami insert metodui yra šie:

//          'Indiana Jones and the Raiders of the Lost Ark',
//          'Titanic is a 1997 American epic romance and disaster film directed, written, produced, and co-edited by James Cameron.',
//          '1981-06-12',
//          115,
//          'PG',
//          'https://m.media-amazon.com/images/I/51K8ouYrHeL._AC_UF894,1000_QL80_.jpg'

//  6. Išbandyti visus metodus.

// Nepamiršti pritraukti Connection klasės. Galima connection inicijuoti movies konstruktoriuje.

// Placeholderiai SQL sakinyje dedami vietoje verčių.