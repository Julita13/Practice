<?php
/*
    1 Array

    Sunaikinkitę visus elementus, kurių reikšmė yra 'error' ir grąžinkite pamodifikuotą masyvą.
    Tikėkitės, kad $products masyvo narių skaičius gali varijuoti, tad naudokite ciklą.
*/

function exercise1(): array
{
    $products = [
        'item_1' => 'desk',
        'item_2' => 'lamp',
        'item_3' => 'error',
        'item_4' => 'sofa',
        'item_5' => 'error',
    ];

    return [];
}

/*
2. POWER

Sukurkite funkciją, kuri pakelia skaičių bet kokiu laipsniu.
Funkcija priima skaičių ir laipsnį, kuriuo reikia pakelti
Panaudokite ciklą.
*/
function exercise2(int $number, int $power): int
{
    return 0;
}


/*
3 RANDOM USER
*/

/*
4 RANDOM USER

Sukurti 2 php failus  lucky_user.php, randomizer.php.
lucky_user.php turi linką pavadinimu "Pick User", kuris veda į kitą failą randomizer.php.

randomizer.php turi funkciją, kuri yra iškviečiama iškarto.

Funkcijoje yra useriu masyvas, sudarytas iš vardų:

[
    'Virgis',
    'Algis',
    'Laura',
    'Matas',
    'Toma',
    'Rasa',
    'Liudas',
    'Edmis'
]

Funkcija atsitiktiniu būtų ištraukia iš masyvo vardą ir jį grąžina.

Funkcija inicijuojama ir jos rezultatas priskiriamas kintamajam $result, ir perduodamas į header() funkciją,
kuri automatiškai grąžina į lucky_user.php, su parametru name.
PVZ.: header("Location: lucky_user.php?name=$result");

lucky_user.php faile yra php kodas, kuris analizuoja ar urle yra parametras name, jei yra -
atvaizduoja jo išrinktą vardą.

/*


5 SHOW TRANSPORT

Sukurti 3 php failus. list.php, show.php ir transport.js.

transport.js turi transporto priemonių duomenis json formatu.

list.php atvaizduoja sąrašą visų transporto priemonių iš transport.js.
Tam naudojamas json_decode, ciklas ir html.

Prie kiekvienos transporto priemonės taip pat pridedamas ir linkas pavadinimu "View",
kuris veda į show.php failą. Kiekvienas View linkas turi vis kitą parametrą - transporto priemonės
unikalų indentifikacinį numerį - id. Pvz id=5.

view.php failas laukia id parametro, jį radus, suranda transport.json atitinkamą
transporto priemonę pagal id vertę ir atvaizduoja tik tos transporto priemonės duomenis.
Vėl json_decode ir surast array'uje.

Atvaizdavimui parašyti atitinkamą html.

Neradus transporto priemonės, arba nesant id parametrui, view.php parašo pranešimą
"Transport not found".

[
    {
        "id": 1,
        "type": "passenger car",
        "name": "Honda Civic",
        "weight": 1550
    },
    {
        "id": 2,
        "type": "airplane",
        "name": "Boeing 737",
        "weight": 41410
    },
    {
        "id": 3,
        "type": "airplane",
        "name": "Cessna DC-6",
        "weight": 1300
    },
    {
        "id": 4,
        "type": "truck",
        "name": "Volvo FH16",
        "weight": 12500
    },
    {
        "id": 5,
        "type": "truck",
        "name": "MB Actros",
        "weight": 13000
    },
    {
        "id": 6,
        "type": "passenger car",
        "name": "VW Golf",
        "weight": 1450
    }
]
*/

/*

6. Advanced pyramid

Išspausdinkite šią struktūrą. 

Sukurti 1 failą generate_pyramid.php.
Failas turi linką generate, kuris veda į tą patį puslapį, su parametru generate=true.
Paspaudus linką perkraunamas puslapis su parametru ir išspausdinama figura.

   
----------------1----------------
--------------2***2--------------
------------3***3***3------------
----------4***4***4***4----------
--------5***5***5***5***5--------
------6***6***6***6***6***6------
----7***7***7***7***7***7***7----
--8***8***8***8***8***8***8***8--
9***9***9***9***9***9***9***9***9


7. TIC TAC TOE
Parašykite programą(terminalui), kuri su jumis žaistų kryžiukų nuliukų žaidimą.
Expected input: php -f extra_task_tictac.php begin
   A  B  C
1 |   |   |   |
  ------------
2 |   |   |   |
  ------------
3 |   |   |   |
Expected input: php -f extra_task_tictac.php A1
   A  B  C
1 | X |   |   |
  -------------
2 |   | 0 |   |
  -------------
3 |   |   |   |
Expected input: php -f extra_task_tictac.php B1
   A  B  C
1 | X | X |   |
  -------------
2 |   | 0 |   |
  -------------
3 | 0 |   |   |
Expected input: php -f extra_task_tictac.php C1
   A  B  C
1 | X | X | X |
  -------------
2 |   | 0 |   |
  -------------
3 | 0 |   |   |
You won!
*/