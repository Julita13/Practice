<?php
declare(strict_types = 1);

//Funkcija yra kodo blokas, kuris yra skirtas specifinei užduočiai atlikti. Palengvina kodo pernaudojimą. Aprašome vieną kartą, o kviečiama gali būti neribotą kiekį kartų. 
//Tai palengvina kodo aptarnavimą, nes nereikia keliose vietose daryti pakeitimų - pakanka pakeisti funkcijos kodą ir veikimas pasikeičia visur, kur ta funkcija yra naudojama. 
//PHP funkciją galima apibrėžti 2 būdais: 
//  Deklaruojant - naudojant raktažodį "function" ir pavadinimą. (Pavadinimas turi būti unikalus). 
//  Apibrėžiant kaip išraišką - t.y. anoniminę funkciją, kuri neturi pavadinimo, bet gali būti priskiriama kintamajam. 

//Kad funkcija suveiktų, ją reikia inicijuoti/iškviesti. 
//Funkcija gali priimti parametrus. 
//Funkcija gali grąžinti atsakymą su "return". 

// function myFirstFunction(){}

//2.Variable SCOPE - kintamojo apimtis. 

//SCOPE - tai kodo veikimo apimtis arba kontekstas. Kiekvienas kintamasis turi savo scope. SCOPES skirtomi į GLOBAL ir LOCAL.

//GLOBAL - tai viskas, kas nėra funkcijos viduje.
//LOCAL - tai viskas, kas yra funkcijose.

//Kintamųjų panaudojimas priklauso nuo to, kokiame scope jis apibrėžtas ir kokiame jis naudojamas. Iš esmės, kintamieji gali būti naudojami tik savo scope. 

//Norint panaudoti kintamojo vertę iš vieno scope į kitą, galima perduoti kaip funkcijos parametrą. 
//arba naudojant keyword global(nepatartina).

//global scope
// $varInGlobal = 15; 
// function example(){
//     //local scope;
//     echo $varInGlobal;
//     $localVar = "1";
//     $localVar2 = "1";
//     $localVar3 = "1"; 
// }

// example(); // - paleidžiame funkciją, kad užsideklaruotų kintamieji

// echo $localVar; // gloval scope nepasiekiamas. 

// function one(){
//     function oneAndAHalf()
//     {
//         return 1.5;
//     }
// }
// ;

// one(); // inicijuojama one ir uždeklaruoja oneAndAHald();
// echo oneAndAHalf(); // Panaudojama oneAndAHalf global scope, nors deklaruota local scope. 

//Jei turime dvi funkcijas, tai jos gali paleisti viena kitą savo viduje. 
//funkcijos gali būti naudojamos kituose scopuose. 
// $variable = "Hi";
// function two()
// {
//     // $variable; // - no; GLOBSL scope kintamasis negali būti panaudotas local scope. 
//     three(); // yes; GLOBAL scope fn panaudota local scope.
// }

// function three(){
//     // $variable; // - no; GLOBAL scope kintamasis negali būti panaudotas local scope. 
//     two(); // yes; GLOBAL scope fn gali būti panaudota local scope. 
// }

//kintamuosius kur uždeklaruojame, ten ir naudojame. funkcijos "vaikšto" per scopus. 

//Funkcija aprėpia kodą į uždarą sistemą, kurioje aprašomi kintamieji nebus pasiekiami iš išorės. 

//Funkcijų deklaravimas
//Turi pavadinimą. Jis turi būti unikalus kode. Gali turėti argumentus/parametrus. 
// Gali grąžinti ar negrąpinti rezultato (void). Gali turėti arba neturėti kodo viduje. 
//Funkcijai reikėtų nurodyti return type. T.Y. kokio tipo vertė yra grąžinama iš funkcijos. 
// function test(): void{
//     echo "asd";
// } // funkcija neturi parametrų ir nieko negrąžina (void).
//Funkcijos iškvietimas. 
// $testas = test();
// echo gettype($testas); 
//Funkcijos iškvietimas yra išraiška - turi konkrečią vertę, todėl rezultatą galima priskirti kintamajam. Jei funkcija nieko negrąžina, rezultatas bus type "null". 
//Funkcijos pavadinimas yra nejautrus didžiosioms/mažosioms raidėms. 
// echo test();

//FUNKCIJA SU PARAMETRAIS/ARGUMENTAIS. 
//Parametrai aprašomi funkcijos skliaustuose, jų pavadinimai yra sugalvojami, bet turi atitikti kintamojo standartą. Parametrai atskiriami kableliais. 
//Parametrai įgaus tokias vertes, kokios būs paduotos į skliaustus kviečiant funkciją. pvz: 
//Čia funkcija, kuri turi grąžinti suklijuotą vardą ir pavardę. 

// function fullName($firstName, $lastName): string 
// {
//     return "$firstName $lastName";
// }
//Ji priima du parametrus - $firstName ir ir $lastName. Šie parametrai yra privalomi paduoti inicijuojant funkciją, nes nėra nurodyta kitaip. 
//Kviečiant funkciją į jš vietas reikės paduoti 2 vertes. 
//Tos vertės bus priskiriamos funkcijos parametrams ir galės būti naudojamos funkcijos viduje - local scope. 
//Kokios tos vertės bus, ši funkcija nenurodo. Parametrų pavadinimai neįpareigoja paduoti tinkamos vertės arba konkretaus tipo vertės. 

//echo fullName(2, 1);
//echo fullName(true, false);
// echo fullName("Kabas", "Krabas")

//Eiliškumas yra svarbus. Kviečiant funkciją, vertės bus perduodamos eilės tvarka: 1 vertę eis į $firstName, 2 į $lastName ir t.t. 

//Funkcijų parametrams galima ir reikėtų nurodyti tipus: 
//Typed params. 

// function myCar(string $make, string $model, int $year): string
// {
//     return "My car is $year $make $model";
// }

// $make = "Audi";
// $model = "A4";
// $year = 2012;

// echo myCar($make, $model, $year);
// echo "\n";

//PHP taip pat turi galimybę apeiti parametrų eiliškumą kvietimo metu, nurodant konkretaus parametro, kuriame vertė skirta, pavadinimą. 
//Pvz. nurodoma, kuri vertė bus priskirtiama kuriam parametrui funkcijoje.

// echo myCar(model: "Vectra", make: "Opel", year: 2008);

//2.Pratimas
//Sukurti funkciją, kuri priima 1 parametrą $number.
//Pagal šį parametrą funkciją grąžina stringą sudėtą
//iš tarpų \n. pvz jei $number = 10, tai bus 10 tarpų.
// function returnStringWithSpaces(int $number){
//     for($i = 0; $i < $number; $i++){
//         return "\n"; 
//     }
// }

// echo returnStringWithSpaces(5);

// function myFn(int $number): void{
//     for($i=0;$i<$number;$i++){
//         echo "\n";
//     }
// }

// myFn(5)
?>