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


1.2.
    Funkcijoje processData() pridedama if sąlyga, kuri tikrina, ar $_POST masyve yra gyvūno vardas t.y.,
    ar buvo įvesta input laukely.
    Jei gyvūno vardo nėra, tuomet $status prilyginamas 0, $message - "Įveskite gyvūno vardą".

    // 1.3. register_contest.php yra funkcija validateData(), kuri priima $_POST perduotų duomenų
//     masyvą ir patikrina, ar duomenys visi duomenys užpildyti.
//     Funkcija grąžina "stringa".
//     processData() panaudoja validateData(), kad patikrintų visi laukai užpildyti.
//     Jei iš validateData() gaunamas pranešimas, kad kažkas neužpildyta,tekstas perduodamas
//     kaip žinutė atgal į formą: "Neužpildyti duomenys: name, age";

1.4. Patobulinti validacijos funkciją.
//     Ji turi atiduoti masyvą, kuriame nurodyta išvardintos klaidos
//     [
//         [name] => Neužpildytas laukelis name
//         [number] => Neužpildytas laukelis number
//         [breed] => Neužpildytas laukelis breed
//         [weight] => Neužpildytas laukelis weight
//         [height] => Neužpildytas laukelis height
//     ]

//     Pavalidavę ivestus duomenis, jei grįžo ne tuščias masyvas perduokite jį json formatu
//     kaip $message į formą  


1.5
//     Formoje aprašykite funkciją message(), kuri priima parametrus $title, $body $status
//     Šie parametrai turi default vertes:
//         function message(string $title = '', string $body = '', int $status = 1)
//     message() turi grąžinti suformuotą žinutės html su tekstu.
//     message() viduje, naudojant sąlygas ir status parametrą, nustatykite kokios spalvos
//     bus žinutės background ir kokia bus $title vertė. Variantai:
//         Jei status 0, 1 arba kita, tai
//         color:
//         red, green, blue,
//         $title:
//         Klaida, Operacija sėkminga, Info
//     $body bus tas kas perduoda, arba nieko. Jei perduotas json stringas, išparsinti į masyvą ir
//     suklijuoti į tekstą.
//     Pakvieskite funkcija message() ir perduokite GET parametrais gauta info:
//     status į $status
//     message į $body
//     title palikite tučią.
//     Galite pasinaudoti "named" argumentu perdavimu.