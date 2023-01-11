<?php
include_once(__DIR__ . "/helpers.php");
function processData(): void
{
    $data = $_POST;
    $oldData = json_encode($data);
    $status = 1;
    $message = "Viskas ok";
    $validatedData = validateData($data);
    if ($validatedData) {
        $status = 0;
        $message = json_encode($validatedData);
    }
    header("Location: pet.php?status=$status&message=$message&old_data=$oldData");

}
processData();

function validateData($data): array
{
    $message = [];
    foreach ($data as $key => $value) {
        if (!$value) {
            $message[$key] = "Neužpildytas laukelis $key";
        }
    }
    return $message;
}




/*
1.4. Patobulinti validacijos funkciją.
Ji turi atiduoti masyvą, kuriame nurodyta išvardintos klaidos
[
[name] => Neužpildytas laukelis name
[number] => Neužpildytas laukelis number
[breed] => Neužpildytas laukelis breed
[weight] => Neužpildytas laukelis weight
[height] => Neužpildytas laukelis height
]

Pavalidavę ivestus duomenis, jei grįžo ne tuščias masyvas perduokite jį json formatu
kaip $message į formą  

1.3. register_contest.php yra funkcija validateData(), kuri priima $_POST perduotų duomenų
masyvą ir patikrina, ar duomenys visi duomenys užpildyti.

Funkcija grąžina "stringa".

processData() panaudoja validateData(), kad patikrintų visi laukai užpildyti.
Jei iš validateData() gaunamas pranešimas, kad kažkas neužpildyta,tekstas perduodamas
kaip žinutė atgal į formą: "Neužpildyti duomenys: name, age";
Funkcijoje processData() pridedama if sąlyga, kuri tikrina, ar $_POST masyve yra gyvūno vardas t.y.,
ar buvo įvesta input laukely.

Jei gyvūno vardo nėra, tuomet $status prilyginamas 0, $message - "Įveskite gyvūno vardą".
1. DUMP
https://php.watch/versions/8.1/spread-operator-string-array-keys
Argument unpacking naudojant unpacking/spread operatoriu ...
Iš kelių kintamųjų padaro verčių masyvą, o masyvą išpakuoja į atskiras vertes.
Veikia funkcijų skliaustuose, tiek inicijuojant, tiek apibrėžiant funkciją.
Tai pat masyvų viduje.
Sukurti helpers.php failą.
Parašyti 2 funkcijas dump(); ir dd(); - vadinama "dump and die"
dump() - nieko negrąžina(neturi return).
Jos paskirtis - išspausdinti perduotus duomenis tokiu būdų:
pvz.: dump(['Labas','Krabas'], 123, 321, 'Viso gero');
Atvaizduojama:
Array
(
[0] => Labas
[1] => Krabas
)
123
321
Viso gero
Funkcijos argumentų skaičius yra neribotas.
Tam pasiekti naudokite array unpacking/spread operatorių - ...
dump() funkcija turi tik vieną parametrą su spread operatoriumi - ...$variables
Pvz.: dump(...$variables){}
Parašyktie kodą, kuris išspausdina visus variables duomenis su šiuo html
"<pre>". print_r() ."</pre>";
dd() - nieko negrąžina(neturi return).
dd() funkcija taip pat priima tik 1 kintamąjį su spread operatoriumi.
Su spread operatoriumi ...$variables
Ji kviečia dump() ir inicijuoja die() funckiją.*/