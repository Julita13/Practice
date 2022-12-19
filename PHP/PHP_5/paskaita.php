<?php
declare(strict_types=1);
//1. BENDRA
/*
Funkcija yra kodo blokas, kuris yra skirtas specifinei užduočiai atlikti.

Palengvina kodo pernaudojimą. 
Aprašoma vieną kartą, o kviečiama gali būti neribotą kiekį kartų.

Tai palengvina kodo aptarnavimą, nes nereikia keliose vietose daryti pakeitimų - pakanka pakeisti 
funkcijos kodą ir veikimas pasikeičia visur, kur ta funkcija naudojama.

Į funkcijos kodo bloką gali būti rašomas bet koks validus PHP, įskaitant kitas funkcijas ir klases.

PHP funkciją apibrėžti galima 2 būdais:
    Deklaruojant - naudojant raktažodį "function" ir pavadinimą.
    Pavadinimas turi būti unikalus, rašome camelCase.
    
    Apibrėžiant kaip išraišką - ty, anoniminę funkciją, kuri neturi pavadinimo, bet gali būti priskiriama 
    kintamąjam.

Kad funkciją suveiktų, ją reikia inicijuoti/iškviesti(call).

Funkcija gali priimti parametrus.

Funkcija gali grąžinti atsakymą su "return".
*/
// // Pavyzdys:
// function myFirstFunction()
// {
// }

//2.Variable SCOPE - kintamojo apimtis.
/*
https://www.w3schools.com/php/php_variables_scope.asp

SCOPE - tai kodo veikimo apimtis arba kontekstas. Kiekvienas kintamasis turi savo scope.
SCOPE skirstomi į GLOBAL ir LOCAL.

GLOBAL - tai viskas, kas nėra funkcijos viduje.
LOCAL - tai viskas, kas yra funkcijose.

Kintamųju panaudojimas priklauso nuo to, kokiame scope jis apibrėžtas ir kokiame jis naudojamas.
Iš esmės, kintamieji gali būti naudojami tik savo scope.

Norint panaudoti kintamojo vertę iš vieno scope kitame, galima perduoti kaip funkcijos parametrą.
Arba galima naudoti keyword global(nepatartina).

Kintamųjų pavadinimai skirtinguose scopuose gali būti vienodi ir nesidubliuos.
Funkcijų kintamieji gali vadintis vienodai, nes jie egzistuoja atsikruose apimtyse.
*/
//global scope
// $varInGlobal = 15;

// function example()
// {
//     //local scope
//     echo $varInGlobal; // - local scope nepasiekiamas.
//     $localVar = '1';
//     $localVar2 = '1';
//     $localVar3 = '1';
// }

// example(); // - paleidžiama fn, kad užsideklaruotį kintamieji.
// echo $localVar; // - glabal scope nepasiekiamas.

// 3. Funkcijų scope'as
/*
Visos deklaruotos funkcijos, taip pat ir klasės, egzistuoja global scope, 
t.y. nepaisant kur ji deklaruota, funkcija visada bus global scope.
Todėl fn pavadinimai negali sutapti.
Deklaruotos funkcijos yra pasiekiamos kituose scopuose.
*/
// function one()
// {
//     function oneAndAHalf()
//     {
//         return 1.5;
//     }
// }
// //Inicijuojama one ir uždeklaruoja oneAndAHalf().
// one();
// //Panaudojama oneAndAHalf global scope, nors deklaruota local scope
// echo oneAndAHalf();
/*
Jei turime 2 funkcijas, tai jos gali paleisti viena kitą savo viduje.

Funkcijos gali būti naudojamos kituose scopuose.
*/
// $variable = 'Hi';
// function two()
// {
//     $variable; // - no. GLOBAL scope kintamasis negali būti panaudotas local scope.
//     three(); // - yes. GLOBAL scope fn gali panaudota local scope.
// }

// function three(){
//     $variable; // - no. GLOBAL scope kintamasis negali būti panaudotas local scope.
//     two();// - yes.GLOBAL scope fn gali panaudota local scope.
// }

// /*
// Funkcija aprėpia kodą į uždarą sistemą, kurioje aprašomi kintamieji nebus pasiekiami iš išorės,
// arba iš !!!PARENT SCOPE!!! - tėvinės apimties(aplinkos), o pastarosios kintamieji nebus pasiekiami funkcijos viduje.
// Kitaip tariant, sukuriamas vadinamas !!!local scope!!! - vietinė apimtis. Visos funkcijos sukuria savo vietinę apimtį
// (vietinę aplinką). Joje deklaruoti kintamieji yra sukuriami kas kart pakvietus funkciją ir ištrinami funkcijai baigus
// darbą(nebent STATIC raktažodis)
// */

//FUNKCIJŲ DEKLARAVIMAS
//Turi pavadinimą. Pavadinimas turi būti unikalus kode.
//Gali turėti argumentus/parametrus.
//Gali grąžinti ar negrąžinti rezultato(void)
//Gali turėti arba neturėti kodo viduje.
//Funkcijai reikėtų nurodyti return type, ty, kokio tipo vertė grįš iš funkcijos.
//Funkcijos pavadinimas yra NEjautrus didžiosioms/mažosioms raidėms.
// echo "\n";
// TesT(); 
//Bet geriausia iškviesti, taip, kaip buvo uždeklaruota.
//Iškviesti funkciją galima ir prieš ir po deklaravimo.
// function test(): void
// {
//     echo 'asd';
// }
//Funkcija neturi parametrų ir nieko negrąžina(void). Tik daro echo.
//Funkcijos iškvietimas
// $testas = test();
/*
Funkcijos iškvietimas yra išraiška - turi konkrečią  vertę,
todėl rezultatą galima priskirti kintamajam.
Jei funckija nieko negražina, rezultatas bus type "null";
*/
// echo gettype($testas);

//Funkcija su parametrais/argumentais.

/*
Parametrai aprašomi funkcijos skliaustuose.
Jų pavadinimai yra sugalvojami, bet turi atitikti kintamojo standartą.
Parametrai atskiriami kableliais.
Parametrai įgaus tokias vertes, kokios bus paduotos į skliaustus kviečiant funkciją.
Pvz.:
Čia funkcija, kuri turi grąžinti suklijuotą vardą ir pavardę.
*/

// function fullName($firstName, $lastName): string
// {
//     return "$firstName $lastName";
// }
/*
Ji Priima 2 parametrus -  $firstName, $lastName.
Šie parametrai yra privalomi paduoti inicijuojant funkciją, nes nėra nurodyta kitaip.
Kviečiant funkciją į jų vietas reikės paduoti 2 vertes.
Tos vertės bus priskiriamos funkcijos parametrams ir galės būti naudojamos funkcijos viduje - 
local scope.
Kokios tos vertės bus, ši funkcija nenurodo. Parametrų pavadinimai neįpareigoja paduoti
tinkamos vertės arba konkretaus tipo vertės.
*/
// echo fullName(2,1);
// echo fullName(true, false);
// echo fullName('Kabas', 'Krabas');
/* 
Eiliškumas yra svarbus. Kviečiant funkciją, vertės bus perduodamos eilės tvarka:
1 vertė eis į $firstName, 2 į $lastName ir t.t.

Taigi šie 3 pakvietimai turės tokį efektą funkcijoje:
*/
// function _fullName($firstName, $lastName)
// {
//     // 1 atveju:
//     $firstName = 2;
//     $lastName = 1;

//     // 2 atveju:
//     $firstName = true;
//     $lastName = false;

//     // 3 atveju
//     $firstName = 'Kabas';
//     $lastName = 'Krabas';

//     return "$firstName $lastName";
// }

//Apibrėžiami local scope kintamieji.

//Funkcijų parametrams galima(reikėtų) nurodyti tipus:
//Typed params.

// function myCar(string $make, string $model, int $year): string 
// {
//     return "My car is $year, $make $model";
// }

// $make = 'Audi';
// $model = 'A4';
// $year = 1999;

// echo myCar($model, $make,  $year);

/*
PHP taip pat turi galimybę apeiti parametrų eiliškumą kvietimo metu,
nurodant konkretaus parametro,kuriam vertė skirta, pavadinimą,
// PVZ: nurodama, kuri vertė bus priskiriama kuriam parametrui funkcijoje
*/

// echo myCar(
//     model: $make,
//     make: 'Opel',
//     year: 2008
// );

