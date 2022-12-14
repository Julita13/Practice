<?php 
// OPERATORS
// Priskyrimo operatorius "="
// $favoriteFood = "Pica ";


// Kombinavimo operatoriai
//  Po lygybės ne perrašo, o prijungia prie egzistuojančio kintamojo vertės ir rezultatą priskiria kaip naują kintamojo vertę

// $favoriteFood .= "Jėga!";
// echo $favoriteFood;

// Aritmetinis kombinuoto priskyrimo operatorius "+="
// $number = 25;
// $number = $number + 5; 
// $number **= 2; pakelia kvadratu, tuo skaičiumi, kuris nurodytas. 
// $number += 5;
// $number *= 5;
// $number /= 5;
// $number %= 5; // Modulo, gražina liekaną
// echo sqrt($number); // traukia šaknį
// echo $number;
// echo gettype("4" / "3");
echo "PALYGINIMO OPERATORIAI" . PHP_EOL . PHP_EOL;

//PHP_EOL - end of line - pradeda tekstą nuo naujos eilutės

// Palyginimo operatoriai 
//Atsakymas visad būna true false. 
//ar lygu:
var_dump(1 === 1); //true. lygina ir tipą, ir reikšmę.
var_dump(1 === "1"); //false
//ar nelygu?
var_dump(1 == "1"); //true
var_dump(1<> "2"); //false 
var_dump(1 != 1); //false
var_dump(1 != 2); //true
var_dump(1 !== "1"); //true

// daugiau - mažiau 
// > <

var_dump(1 <= 1); //true

// ERDVĖLAIVIS
//rezultatas yra skaičius int, kurio vertė gali būti:
//1. skaičius mažesnis už 0; 
//2. skaičius lygus 0; 
//3. skaičius didesnis už 0; 

$a = 40;
$b = 50;
var_dump($a <=> $b);

//jei 0 - abu lygūs. jei -1 - a mažesnis nei . jei +1 - b didesnis už a


//LOGINIAI OPERATORIAI 
echo PHP_EOL;
$c = true;
$d = false;
//AND
var_dump($c && $d); //false
var_dump($c AND $d); //false
//OR
var_dump(($c || $d)); //true
var_dump(($c OR $d)); //true
//NOT
// not true yra false, not false yra true
var_dump(!$c); // false
var_dump(!$d); // true

echo PHP_EOL;

//Truthy - falsy
//PHP sąlygose vertinama boolean true arba false. Bet jei paduoda vertė nėra boolean, oho bandys išraiškas įvertinti kaip true arba false. 
//Tai vadinama truthy arba falsy. Reiškia, jei nėra vertinama griežta lygybė, bet kokia NE TUŠČIA vertė laikoma true,
// bet kokia TUŠČIA VERTĖ laikoma false. 
//Tuščios vertės: 
//1. null,
//2. 0,
//3. [];
//4. " ",
var_dump(null === true); //false
var_dump(0 == false); //true;
var_dump([] == false); //true
var_dump("" == false); //true

//truthy
// vertės NE 4 viršuje
var_dump("aaa" == false); //false
var_dump(25 == true); // true
var_dump(["123"] == false); // false

// SĄLYGA
if(true){
    echo "TRUE";
} else{
    echo "FALSE";
} //TRUE
echo "\n|-----------------------------------------|\n";
if(null){
    echo "TRUE";
} else{
    echo "FALSE";
} //FALSE
echo "\n|-----------------------------------------|\n";
if(![]){
    echo "TRUE";
} else{
    echo "FALSE";
} //TRUE
echo "\n|-----------------------------------------|\n";
if("MONIKA"){
    echo "TRUE";
} else{
    echo "FALSE";
} //TRUE
echo "\n|-----------------------------------------|\n";


class TruthyFalsy
{
}
;
$truthyFalsy = new TruthyFalsy();

if($truthyFalsy){
    echo "TRUE";
} else{
    echo "FALSE";
} //TRUE, nes klasė nėra tuščia
echo "\n|-----------------------------------------|\n";


$array = [];
$array[] = 15;

if($array){
    echo "FIRST ARRAY VALUE IS {$array[0]}";
} else{
    echo "ARRAY IS EMPTY";
} //TRUE, nes klasė nėra tuščia
echo "\n|-----------------------------------------|\n";

$string = " ";
$string = "Labas";

if($string){
    echo "String value is {$string}";
} else{
    echo "String is empty";
} //TRUE, nes klasė nėra tuščia
echo "\n|-----------------------------------------|\n";


//elseif PHP rašosi kartu!!
?> 