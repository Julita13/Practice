<?php

//Masyvi. 
//Duomenų tipas, kurių verčių raktai yra skaičiai, nurodantys vienos vertės vietą masyve. Rašant vertes į masyvą, 
//indeksas priskiriamas automatiškai, pradedant nuo 0. 

// Array (
//     [0] => raudona - elementas: rakto ir vertės pora
//     [1] => žalia - elementas: rakto ir vertės pora. 
// )

$colors = ["raudona", "žalia"];
print_r($colors)."\n";

//masyvo printinimui naudojamas print_r


// Norint gauti konkrečią masyvo vertę, reikia nurodyti elemento raktą laužtiniuose masyvo skliaustuose: 
echo $colors[0];

//vertės pripliusavimas prie masyvo: 
$colors[] = "mėlyna";
array_push($colors, "geltona"); //prideda elementą į galą;
array_unshift($colors, "violetinė");

array_splice($colors, 0, 2, 'LALALA');
print_r($colors)  ;
echo "\n";
var_dump($colors);


// Pašalinti: 
unset($colors[2]);
//Resetinti indexus
$colors = array_values($colors);
//Pašalinti 2
array_pop($colors); // visada šalina galą
// unset($colors[0]);
print_r($colors);

//Asociaciniai masyvai
// Tai masyvai, kuriuos kuriant nurodoma konkreti elemento rakto vertė.
//Raktus rašome snake_case. 
$holiday = [
    'first_name' => 'Julita',
    'country' => 'France',
    'start_date' => '2023-05-02',
    'end_date' => '2023-05-14',
    'type' => 'recreational',
];
echo  "\n";
echo $holiday["first_name"], "\n";
echo $holiday["country"], "\n";
echo $holiday["start_date"], "\n";

$holidays["persons"] = 2;

//Raktai gali būti string arba int tipo. Kitokios raktų vertės bus castinamos/verčiamos į int arba string.
$dumbArray = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d",
    "08" => "e",
    null => "f",
);

print_r($dumbArray);

//Masyvo raktai, kurie yra tame pačiame lygyje, jie turi būti unikalūs. 
//Esant tapatiems raktams masyve, TIK paskutinis elementas su tokiu raktu bus išsaugotas. 


//Daugiamačiai masyvai
//Tai masyvas, kurio bent vieno elemento vertė yra masyvas. 

//Daugiamatis masyvas iš 2 elementų, masyvų. 
//Pirmas lygis enumeratyvus. Antras - asociacinis. 

// $example = [
//     "a",
//     "b",
//     "c",
//     ["ab", "cd", "ef",
// [
//     "You win!",
// ]],
// ];

// print_r($example[3]);
// // print_r($example[3][1]);
// print_r($example[3][3][0]);

$students = [
    [
        "first_name" => "Viktorija",
        "grade" => 10,
    ],
    [
        "first_name" => "Lukas",
        "grade" => 9,
    ]
];

// echo $students[0]["first_name"];

foreach($students as $student){
    echo "{$student["first_name"]} \n";
    echo "{$student["grade"]} \n";
}

?>