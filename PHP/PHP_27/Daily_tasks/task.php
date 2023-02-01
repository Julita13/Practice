<?php
declare(strict_types=1);

/* 
Parašykite įrankį inventoriaus tikrinimui. 
Inventorių rasite faile "./inventory.json"

1. Aprašykite klasę, Inventory.

2. Į konstruktorių perduokite duomenis iš inventory.js masyvo formatu.

3. Sukurkite metoda check(), ji paleidus bus atliekamas inventoriaus patikrinimas.

4. Metodas check priima inventoriaus produkto id ir kiekį, tokiu string formatu:  
    $invetory->check("1:3,2:2,4:1"), reiškia, 
kad mes norime patikrinti, ar inventoriuje egzistuoja:- produktas, kurio id yra 1, o kiekis 3- produktas, kurio id yra 2, 
o kiekis 2- produktas, kurio id yra 4, o kiekis 15. 
Gavus string duomenis jie yra išskaidomi ir daromas patikrinimas ar egzistuoja invetoriuje.
Jeigu paduotas produkto id neegzistuoja, arba nepakanka kiekio,  išspausdinkite pranešimą:- 
Produktas su id "15" neegzistuoja- 
Produkto "5" likutis yra 0
Pakaks spausdinti tik vieną klaidą apie inventoriaus neatitikimus,net jeigu tikrinami keli nevalidūs produktai.

6. Prieš išmetant klaidą taip pat įrašykite pranešimą apie šį įvykį į log'ą (log.txt)
Tam pasitelkti papildomą metodą writeToLog(), kuris priims tekstą įrašymui.
Log'o įrašo formatas: 2020-01-01 15:15:15 Produkto "15" nėra inventoriuje!!!
Užduočiai įgyvendinti panaudokite exception'us.
Klasė, tikrinanti inventorių, turi mesti exception'us, o ją kviečiantis kodas - gaudyti.
Naudokite savo custom exception'o klasę (pvz.: InventoryException).
!!!Programos kvietimo pavyzdys:

$inventory = new Inventory($inventoryData);
$inventory->check("15:3, 2:2, 4:1");

Produktas su id "15" neegzistuoja
$inventory->check("1:30, 2:2, 4:1");

Produkto "1" likutis yra 0

$inventory->check("1:30, 2:2, 4:1");
Produkto "1" likutis yra 15*/