<?php
/*
1.0
Sukurkite 2 failus pet.php ir register_contest.php
pet.php forma POST metodu siunčia gyvūno duomenis į register_contest.php
duomenų laukeliai:
name, age, breed, weight, height    

Faile register_contest.php yra funkcija processData().
processData() neturi return.
processData() yra 2 kintamaieji:
    $status, kuris pradžioje jis lygus 1
    $message, kuris pradžioje yra lygus "Viskas ok".

funkcijos pabaigoje yra header() funkcija, kuri grąžina atgal į pet.php su GET parametrais
status=$status ir message=$message.
pvz.: header("Location: somwhere.php?param=1");

1.2.
    pet.php faile yra php kodas, kuris tikrina, ar $_GET masyve yra "status" raktas.
    Jei "status" yra, atvaizduojamas žinutės HTML:

        apie 300 X 200 pixelių kvadrato formos
        viršutiniame naršyklės kampe(kuriame - pasirinktinai)
        backgroundo spalva priklausys nuo "status" vertės/
   
    Jei "status" 1, žinutės kvadrato fonas yra žalias, jei "status" yra 0 - tai raudonas.

    Jei $_GET turi "status", taip pat tikrinama ar $_GET turi "message" raktą.
   
    Jei taip, tuomet atvaizduojamas žinutės tekstas iš "message". Jei  "message" nėra:
        status 0 atveju tekstas bus "Error".
        status 1 atveju tekstas bus "Success".
*/

