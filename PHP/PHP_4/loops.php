<?php
echo "Buenos dias";
echo "\n";

//CIKLAI
//ciklai kartojo kodo bloką kol specifinė sąlygą yra teisinga(true). 

//FOR ciklas
//Entry control - įeigod kontrolės. 
//Patikrina ar sąlyga atitinka prieš pradedant vykdymą. Iš anksto žinoma, kiek kartų suksis ciklas.
// "continue" skipina vieną žingsnį ir eina prie tolimesnės operacijos. 

// for($i = 1; $i <= 10; $i++){
//     if($i === 4 || $i === 7){
//         continue; 
//     }
//     echo $i . "\n";
// }
// ;


//while ciklas
//Patikrina ar sąlyga atitinka prieš pradedant. Iš anksto žinoma, kiek kartų suksis ciklas. 
//  $n+=3; - printina kas 3-čią daiktą
// $n = 0; 

// while($n < 15){
//     echo "WHILE - $n\n";
//     $n+=2;
// }

//DO WHILEciklas 
//Exit control - išeigos kontrolė. Pirma paleidžia, po to tikrina ar sąlyga vis dar atitinka. Todėl visada bent kartą bus įvykdomas kodas.

$x = 3;

do {
    echo "DO WHILE - ". ($x * 2)."\n";
    $x++;
} while (false);

//forEach
//Darbui su masyvais. Suka ciklą tiek kartų, kiek masyvų yra elementų. Kiekvieno sūkio metu yra prieinamas masyvo raktas ir reikšmė. Raktas ir reikšmė priskiriami pasirinktiems kintamiesiems. 
//Rakto priskirimas yra optional/nebūtinas.

$letters = ["a", "b", "c"];
foreach($letters as $letter){
    echo $letter . "\n";
    // break; // šiuo atveju jis nutraukia ciklą po vieno apsisukimo.
}

//Su raktu. Pasirinktinas rakto kintamasis. 
foreach($letters as $key => $element){
    echo "Element $element has an index of $key"; // išprintina raktų numerius 0,1,2
}



?>

