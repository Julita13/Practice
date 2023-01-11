<?php 

// 1. DUMP
 
// https://php.watch/versions/8.1/spread-operator-string-array-keys
// Argument unpacking naudojant unpacking/spread operatoriu ...
 
// Iš kelių kintamųjų padaro verčių masyvą, o masyvą išpakuoja į atskiras vertes.
// Veikia funkcijų skliaustuose, tiek inicijuojant, tiek apibrėžiant funkciją.
// Tai pat masyvų viduje.
 
// Sukurti helpers.php failą.
 
// Parašyti 2 funkcijas dump(); ir dd(); - vadinama "dump and die"
 
// dump() - nieko negrąžina(neturi return).
// Jos paskirtis - išspausdinti perduotus duomenis tokiu būdų:
// pvz.: dump(['Labas','Krabas'], 123, 321, 'Viso gero');
 
// Atvaizduojama:
 
//     Array
//     (
//         [0] => Labas
//         [1] => Krabas
//     )
//     123
//     321
//     Viso gero
 
// Funkcijos argumentų skaičius yra neribotas.
// Tam pasiekti naudokite array unpacking/spread operatorių - ...
// dump() funkcija turi tik vieną parametrą su spread operatoriumi - ...$variables
// Pvz.: dump(...$variables){}
 
// Parašyktie kodą, kuris išspausdina visus variables duomenis su šiuo html
// "<pre>". print_r() ."</pre>";
 
// dd() - nieko negrąžina(neturi return).
// dd() funkcija taip pat priima tik 1 kintamąjį su spread operatoriumi.
// Su spread operatoriumi ...$variables
// Ji kviečia dump() ir inicijuoja die() funckiją.

// 1.2.
//     Funkcijoje processData() pridedama if sąlyga, kuri tikrina, ar $_POST masyve yra gyvūno vardas t.y.,
//     ar buvo įvesta input laukely.
//     Jei gyvūno vardo nėra, tuomet $status prilyginamas 0, $message - "Įveskite gyvūno vardą".

// 1.3. register_contest.php yra funkcija validateData(), kuri priima $_POST perduotų duomenų
//     masyvą ir patikrina, ar duomenys visi duomenys užpildyti.
//     Funkcija grąžina "stringa".
//     processData() panaudoja validateData(), kad patikrintų visi laukai užpildyti.
//     Jei iš validateData() gaunamas pranešimas, kad kažkas neužpildyta,tekstas perduodamas
//     kaip žinutė atgal į formą: "Neužpildyti duomenys: name, age";

// 1.4. Patobulinti validacijos funkciją.
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

// 1.5
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