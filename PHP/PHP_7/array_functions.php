<?php 

//1. 
//IMPLODE/EXPLODE

// Implode iteruoja per masyvo elementus ir sujungia juos pagal paduotą tekstinį segmentą. Tekstinis segmentas taikomas tik tarp masyvo narių. 
// Prieš pirmąjį ir po paskutiniojo nario tekstas nėra dedamas. 
//Šią, kaip ir daugelį kitų inbuilt funkcijū būtų galima apsirašyti patiems pasinaudojant for arba foreach ciklais. 
//Tačiau tai daryti nėra tikslinga, nes kalboje įdiegtos funkcijos visada veiks greičiau dėl įvairių optimizacijų.

//explode verikia atvirkščiai, string suskaido į masyvo elementus, per paduotą jungiamąjį ženklą. 

$products = [
    "p1" => "kompiuteris",
    "p2" => "telefonas",
    "p3" => "stalas",
    "p4" => "stalas",
    "p4" => "telefonas",
];

$text = implode(", ", $products);
// echo "\n\n 1 \n\n";

echo "1\n";
echo $text;
echo "\n\n";
// print_r(explode(", ", $text));

//2.
//Count()
//Funkcija naudojama gauti masyvo elementų skaičiui. Masyvo elementų skaičius vadinamas masyvo ilgiu. Kitaip tariant, count mums grąžina masyvo ilgį. 
//Ši funkcija veikia tik su masyvais. Jei nesate tikri, ar Jūsų reikšmė - kintamasis yra masyvas, geriau pasitikrinti ir tik tuomet kviesti count funkciją. Bandymas kviesti count'ą kito tipo reikšmei sukels klaidas. 

echo "2\n";
echo count($products);
echo "\n\n";

//3. 
//is_array() 
//Patikrina, ar reikšmė yra masyvas. Naudingas, kai nesame tikri dėl kintamojo tipo. Dažniausiai tai nutinka, kai dirbame su vartotojo pateiktais duomenimis. 

echo "3\n";
var_dump(is_array($products));
echo "\n\n";

//4. 
//array_values()
// Funkcija grąžina naują masyvą, kuris talpina visas originalaus masyvo reikšmes. Originalūs raktai yra pakeičiami automatiškai 
//sugeneruotais int tipo raktais (prasideda nuo 0). Tai naudinga, kai norime iš naujo indeksuoti enumeratyvų masyvą, pvz. po to, kai buvo atliktas rikiavimas naudojant asort,
//kuomet turime paversti asociatyvų masyvą į enumeratyvųjį. 

echo "4\n";
var_dump(array_values($products));
echo "\n\n";

//5.
// array_keys()
//Veikia panašiu principu, kaip array_values, tik šiuo atveju grąžina masyvo raktus kaip enumeratyvųjį masyvą. 

echo "5\n";
var_dump(array_keys($products));
echo "\n\n";

//6.
//array_unique()
//Paprastas būdas atsikratyti dublikuotų reikšmių. Veikia ir su asociatyviais masyvais - nekreipia dėmesio į raktus. 

echo "6\n";
var_dump(array_unique($products));
echo "\n\n";

//7. 
//reset()
//Grąžina patį pirmąjį masyvo elemento reikšmę. Jeigu masyvas tuščias, gauname false.
//Veikia tik su kintamaisiais, kurių tipas yra masyvas. Šiai funkcijai negalime paduoti plikos reikšmės - gausime klaidą. 

echo "7\n";
var_dump(reset($products));
echo "\n\n";

//8.
//array_column()
//Veikia tik su daugiamačiais masyvais arba masyvais, kurie saugo objektus. 
//Iteruoja per masyvo elementus, iš jų pagal nurodytą raktą traukia reikšmes ir deda į naują masyvą. Rezultatas - naujas masyvas su 

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

echo "8\n";
var_dump(array_column($orderItems, "priceRegular"));
echo "\n\n";

//9.
//array_map()
//Iteruoja per masyvo elementus ir su kiekvienu iš jų kviečia paduotą anoniminę funkciją (dar vadinamą callback'ą).
//Naudinga, kuomet norime pasinaudodami vieno masyvo reikšmėmis, sukurti kitą. 
//Priima 2 privalomus argumentus - funkciją (callback) ir bent vieną masyvą. Taip pat galima pridėti ir daugiau masyvų, kaip argumentų. 
//Ciklo principu eina per visus masyvo elementus ir kiekvienam elementui arba, jei yra paduotas daugiau nei vienas masyvas, elementų grupei pritaiko callback'o funkciją. 
//Pačios callback funkcijos argumentai bus kiekvieno paduoto masyvo elementai. 
//Grąžina naują masyvą, kurio kiekvienas elementas yra callback funkcijos atliktų operacijų rezultatai. 

$masyvas1 = ["Mykolas", "Lina", "Rimas", "Ieva", "Tomas"];

$callback = function ($a) {
    return $a." is awesome!";
};

echo "9\n";
$newArray = array_map($callback, $masyvas1, $masyvas2);
print_r($newArray);
echo "\n\n";

//10.
//filter()
//Iteruoja per masyvo (argumentas 1) elementus ir su kiekvienu iš jų kviečia paduotą anoniminę funkciją (argumentas nr2.)
//

// echo "10\n";
// var_dump(filter($masyvas1));
// echo "\n\n";

//11
//array_reduce



?>