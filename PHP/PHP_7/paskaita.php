<?php
/*
1.
implode / explode

Implode iteruoja per masyvo elementus ir sujungia juos pagal paduotą tekstinį segmentą. 
Tekstinis segmentas taikomas tik tarp masyvo narių.
Prieš pirmąjį ir po paskutiniojo nario tekstas nėra dedamas. 
Šią, kaip ir daugelį kitų inbuilt funkcijų būtų galima apsirašyti patiems pasinaudojant for arba foreach ciklais.
Tačiau tai daryti nėra tikslinga, nes kalboje įdiegtos funkcijos visada veiks greičiau dėl įvairių optimizacijų, taip pat todėl, kas jos veikia C kalbos lygyje.

explode - veikia atvirkščiai, string suskaido į masyvo elemetus, per paduotą jungiamąji ženklą.
*/
$products = [
    'p1' => 'kompiuteris',
    'p2' => 'telefonas',
    'p3' => 'stalas',
    'p4' => 'stalas',
    'p5' => 'telefonas',
];

$text = implode(', ', $products);

echo "\n\n 1 \n\n";
echo $text;
print_r(explode(', ', $text));

/*
2.

count()
Funkcija naudojama gauti masyvo elementų skaičiui. Masyvo elementų skaičius vadinamas masyvo ilgiu – array length.
Kitaip tariant, count mums grąžina masyvo ilgį. 

Ši funkcija veikia tik su masyvais. Jeigu nesate tikri, ar jūsų reikšmė/kintamasis yra masyvas, geriau pasitikrinkite (is_array) 
ir tik tuomet kvieskite count funkciją. Bandymas kviesti count kito tipo reikšmei sukels klaidą.
*/
echo "\n\n 2 \n\n";
echo count($products);

/*
3.

is_array()
Galime patikrinti, ar reikšmė yra masyvas. Naudingas, kai nesame tikri dėl kintamojo tipo.
Dažniausiai tai nutinka, kai dirbame su vartotojo pateiktais duomenimis.
*/

echo "\n\n 3 \n\n";
var_dump(is_array($products));

/*
4.

array_values()

Funkcija grąžina naują masyvą, kuris talpina visas originalaus masyvo reikšmes. Originalūs raktai yra pakeičiami 
automatiškai sugeneruotais int tipo raktais (prasideda nuo 0). Tai naudinga tais atvejais:
kai norime iš naujo suindeksuoti enumeratyvų masyvą, pvz.: po to kai buvo atliktas rikiavimas naudojant asort
kuomet turime paversti asociatyvų masyvą į enumeratyvų, nes originalūs raktai mums nėra aktualūs ar netgi trukdo
*/

echo "\n\n 4 \n\n";
var_dump(array_values($products));

/*
5.

array_keys()
Veikia panašiu principu kaip array_values, tik šiuo atveju grąžina masyvo raktus kaip enumeratyvų masyvą.
*/

echo "\n\n 5 \n\n";
var_dump(array_keys($products));

/*
6.

array_unique()
Paprastas būdas atsikratyti dublikuotų reikšmių. Veikia ir su asociatyviais masyvais – nekreipia dėmesio į raktus, tikrina tik reikšmes
*/

echo "\n\n 6 \n\n";
var_dump(array_unique($products));

/*
7.
 
reset()
Ši funkcija grąžina pirmojo masyvo elemento reikšmę. Jeigu masyvas yra tuščias, gauname false.
Veikia tik su kintamaisiais, kurių tipas yra masyvas. Šiai funkcijai negalime paduoti plikos reikšmės - gausime klaidą
*/

echo "\n\n 7 \n\n";
var_dump(reset($products));
//giminingos funkcijos
var_dump(next($products));
var_dump(prev($products));
var_dump(current($products));


/*
8.
 
array_column();
https://www.php.net/manual/en/function.array-column.php

Veikia su daugiamačiais masyvais arba masyvais, kurie saugo objektus.
Iteruoja per masyvo elementus, iš jų pagal nurodytą raktą traukia reikšmes ir deda į naują masyvą.
Rezultatas - naujas masyvas su vertem pagal nurodytą raktą.
*/

$orderItems = [
    [
        'name' => 't-shirt',
        'priceRegular' => 15,
        'priceLow' => 13,
        'quantity' => 3,
    ],
    [
        'name' => 'coat',
        'priceRegular' => 74,
        'priceLow' => 60,
        'quantity' => 6,
    ],
    [
        'name' => 'shirt',
        'priceRegular' => 25,
        'priceLow' => 20,
        'quantity' => 2,
    ],
    [
        'name' => 'shoes',
        'priceRegular' => 115,
        'priceLow' => 100,
        'quantity' => 1,
    ],
];

echo "\n\n 8 \n\n";
$prices = array_column($orderItems, 'priceRegular');
var_dump(array_sum($prices));

/*
9.
array_map()
Iteruoja per masyvo elementus ir su kiekvienu iš jų kviečia paduotą anoniminę funkciją (dar vadinama callback).
Funkcija array_map naudinga, kuomet norime pasinaudodami vieno masyvo reikšmėmis, sukurti kitą.

https://www.php.net/manual/en/function.array-map.php

Priima 2 privalomus argumentus - funkciją(callback) ir bent vieną masyvą. 
Taip pat galima pridėti ir daugiau masyvų, kaip argumentų. 

Ciklo principu eina per visus masyvų elementus ir kiekvienam elementui,
arba, jei yra paduotas daugiau nei vienas masyvas, elementų grupei pritaiko callback funkciją. 

Pačios callback funkcijos argumentai bus kiekvieno paduoto masyvo elementai.

Grąžina naują masyvą, kurio kiekvienas elementas yra callback funkcijos atliktų 
operacijų rezultatai.
*/

echo "\n\n 9 \n\n";

$masyvas1 = ['Mykolas', 'Lina', 'Rimas', 'Ieva', 'Tomas'];
$masyvas2 = ['800000', '877777', '8444444', '88888888'];
$masyvas3 = ['Vilniaus g.', 'Kauno g.', 'Šiaulių g.', 'Klaipėdos g.'];

$callback = function ($a) {
    return $a . 'is awsome!';
};

$newArray = array_map(function ($a) {
    return $a . 'is awsome!';
}, $masyvas1);

print_r($newArray);

$callbackMulti = function ($a, $b, $c) {
    $a; // - kas kart vis kita $masyvas1 elemento vertė - Mykolas | Lina | Rimas    ...ir t.t.
    $b; // - kas kart vis kita $masyvas2 elemento vertė - 800000 | 877777 | 8444444 ... ir t.t.
    $c; // - kas kart vis kita $masyvas3 elemento vertė - Vilniaus g. | Kauno g. | Šiaulių g. ...ir t.t.
    return "$a, $b and $c is awsome!";
};

$newArray = array_map($callbackMulti, $masyvas1, $masyvas2, $masyvas3);
print_r($newArray);


/*
10.
https://www.php.net/manual/en/function.array-filter.php
array_filter
Iteruoja per masyvo (argumentas nr. 1). elementus ir su kiekvienu iš jų kviečia paduotą anoniminę funkciją (argumentas nr. 2).
Į galutinį masyvą įtraukiamos tik tos pradinio masyvo reikšmės, su kuriomis callback'as grąžino true.
Jeigu tokių reikšmių nebuvo, galutinis masyvas yra tuščias.
*/
$products = [
    [
        'name' => 'kompiuters',
        'price' => 1500,
    ],
    [
        'name' => 'monitorius',
        'price' => 500,
    ],
    [
        'name' => 'telefonas',
        'price' => 1000,
    ],
    [],
    [],
];

$expensiveProducts = array_filter($products, function ($array) {
    return $array['price'] >= 1000;
});
print_r($products);
//jei nepaduodamas callbackas, tai pašalinamos tuščios vertės iš masyvo
$array = array_filter($products);
print_r($array);

/*
11.

array_reduce
Iteruoja per masyvo (argumentas nr. 1). elementus ir su kiekvienu iš jų kviečia paduotą 
anoniminę funkciją (argumentas nr. 2).
Anoniminės funkcijos tikslas – sutraukti, sukoncentruoti masyvą iki vienos reikšmės (to reduce)

callback funkcija turi turėti 2 parametrus,
vadinamus carry ir item (galima vadinti ir kitaip, svarbu, kad abu būtų)
1 parametras carry išlaiko return vertę iš buvusios ciklo iteracijos
2 parametras item yra einamo ciklo iteracijos vertė

Kadangi išlaikoma buvęs retur rezultatas, galima akumuliuoti ir gauti sumą arba
sąjungą.
*/

$sum = array_reduce($products, function ($carry, $product) {
    
    if (array_key_exists('price', $product)) {
        // $carry[] = $product['price'];
        $carry += $product['price'];

    }
    return $carry;
});

var_dump($sum);

/*
12.

array_diff
Gražina masyvą, kuris yra sudarytas iš elementų, egzistuojančių tik pirmajame masyve
Tikrina per pirmo elemento perspektyvą
*/

$fruitsMain = [
    'bananna',
    'apple',
    'pear',
];

$fruitsOther = [
    'grape',
    'orange',
    'pear',
    'apple',
];


echo "\n\n 12 \n\n";
var_dump(array_diff($fruitsOther, $fruitsMain));

/*
13.

array_intersect
Randa dviejų ar daugiau masyvų susikirtimo taškus - sutampančias reikšmes.
*/
$colors1 = ['red', 'blue', 'green', 'orange'];
$colors2 = ['red', 'black', 'green', 'blue'];

echo "\n\n 13 \n\n";
var_dump(array_intersect($colors1,$colors2));

/*
14.

array_merge
Sujungia du ar daugiau masyvų.
Jeigu masyvai yra asociatyvūs, elementai, turintys tuos pačius raktus būna perrašomi
Kitu atveju - jeigu masyvai yra enumeratyvūs, tuomet į raktų dublikatus nekreipiama dėmesio, visos reikšmės yra sudedamas į galutinį masyvą, elementai yra reindeksuojami.


*/

$fruitsMain = [
    'bananna',
    'apple',
    'pear',
];

$fruitsOther = [
    'grape',
    'orange',
    'pear',
    'apple',
];

echo "\n\n 14 \n\n";
var_dump(array_merge($fruitsMain,$fruitsOther));

/*
15.

https://www.php.net/manual/en/function.array-search.php
array_search
Leidžia ieškoti masyve esančios reikšmės.
Sėkmės atveju grąžina elemento raktą, kitu atveju – false
Paieška vyksta tik pirmame masyvo lygyje.
Patartina visada paduoti ir trečiajį parametrą, kuris užtikrina, kad paieška bus griežta.
*/

$fruitsMain = [
    'bananna',
    'apple',
    'pear',
];

echo "\n\n 15 \n\n";
var_dump(array_search('apple', $fruitsMain, true));

/*
16.

in_array
Veikia labai panašiai į array_search, tačiau fiksuoja tik faktą, ar reikšmė egzistuoja masyve. Jeigu reikšmė egzistuoja, gražina true, kitu atveju false.
Patartina visada paduoti ir trečiajį parametrą, kuris užtikrina, kad paieška bus griežta.
*/

$fruitsMain = [
    'bananna',
    'apple',
    'pear',
];

echo "\n\n 16 \n\n";
var_dump(in_array('apple', $fruitsMain, true));


/*
array_walk

//Pritaikyti funkciją kiekvienam masyvo nariui.
//Grąžina true.
//Negalima pakeisti masyvo struktūros.
//Galima naudoti referencinį parametrą (nuorodą &) jei norima modifikuoti masyvo vertes
*/

$elements = ['a', 'b', 'c'];
array_walk($elements, function (&$value, $key) {
    $value = $value . 'LABAS' . $key;
});

print_r($elements);
die();