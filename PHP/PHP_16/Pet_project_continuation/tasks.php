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


// I Gyvūnų sąrašas

// Sukurkite puslapį gyvunėlių sąrašui atvaizduoti

// 1. Sukurti pets.json failą ir įsikelti bent 2 json įraštus
// 2. Sukurti pet_functions.php failą, kur bus rašomos reikalingos funkcijos.
// 3. pet_functions.php parašyti funkciją getPets(), kuri ištraukia duomenis iš pets.json
// failo, dekoduoja į masyvą ir grąžina.

// 4. Išbandyti funkciją su dd();

// 5. Sukurkite index.php failą, kuriame bus atvaizduojamas gyvūnų sąrašas
// Struktūra body > main > section > article
// Kiekvienas gyvūnas bus atvaizduojamas article taguose.
// Turi nuotrauką ir visus išvardintus duomenis.

// [
//   {
//     "id": 1,
//     "name": "Bobikas Trumpakojis",
//     "age": "2",
//     "breed": "Veislinis kieminukas",
//     "kind": "\u0160uo",
//     "weight": "10",
//     "height": "30"

//   },
//   {
//     "id": 2,
//     "name": "Mops\u0117 Naglasnuk\u0117",
//     "age": "2",
//     "breed": "Raina gatvin\u0117 pantera",
//     "kind": "Kat\u0117",
//     "weight": "4",
//     "height": "15"
//   }
// ]

// II Vieno gyvūno puslapis

// Prie kiekvieno gyvūno sąraše turi atsirasti linkas į kitą puslapį show_pet.php
// Perduodamas linkas su skirtingų "id" parametrų ir atitinkama id verte.

// pet_functions.php faile sukurti funkciją getPet(), kuri grąžina 1 gyvūno duomenis, pagal
// pateiktą id.

// show_pet.php turi html'a, kuris atvaizduos 1 gyvūno nuotrauką ir duomenis.
// Sturkūra body > main > section > article.
// Gyvūnas yra <article> tage


// III Įrašyti  duomenis į failą. 
// 1. Sukurti funkciją createRecord() pet_functions.php faile, kurią iškvietus bus padaromas naujas įrašas pets.json faile. 
// 2. Funkcija duomenis įrašymui gaus iš formos. 
// 3. Funkcija kviečiama sėkmingai validavus įvestis. 
// 3. Kiekvienam naujam įrašui turi būti sugeneruojama id vertė, +1 nuo didžiausios esamos tarp įrašų. 
// 4. Funkcija grąžina naujo įrašo "id"(int).   
// 5. Pateikus formą ir sėkmingai padarius naują įrašą automatiškai nuvedama į index.php, kur matoma, ar pasipildė sąrašas. 
// 6. Validacijai nepraėjus, grąžinama į formą.php 


