<?php 
// PHP Kintamasis - duomenų laikymo konteineris
// Pradedamas ženklu "$" ir naudojamas su "$" 
$greeting = "Hello";
echo $greeting, "\n";
//Gali saugoti įvairius duomenų tipus.
//Sukuriant kintamąjį, nereikia nurodyti duomenų tipo, kurį saugo kintamasis. 
// Galima lengvai perrašyti, net į kitą duomenų tipą. 
$greeting = 10;
echo $greeting, "\n";

// KINTAMOJO PAVADINIMAS
// Pavadinimas privalo prasidėti raide arba underscore ženklu "_". 
// Negali prasidėti skaičiumi, bet gali turėti skaičiu, t.y. - (A-z, 0-9 ir _). 
// Negali turėti tarpų
// Jautrus didžiosioms ir mažosioms raidėms.

// KINTAMOJO RAŠYMO STANDARTAS
// Pradedame mažąja raide.
// Jei susideda iš kelių žodžių, suduriama vienu iš šių būdu: 
// snake_case (nenaudosim) - kiekvienas žodis atskirtas "_". Visi mažosiomis. Pvz.:
// $first_name = "Rūta"; // valid užrašymas, bet nenaudosim. 

// Naudosime camelCase - kiekvienas naujas žodis didžiąja raide: 
// $firstName = "Julita";
// echo $firstName;

//Kintamieji rašomi anglų kalba, jų pavadinimui turi kuo geriau apibūdinti saugomos vertės reikšmę


//  KONSTANTOS
//  Reikšmės, kurios nebus keičiamos.
// Rašomos didžiosiomis raidėmis, skiriant underscoru "_".
//  Aprašome arba su define funkcija
define("DAYS_IN_YEAR", 365); 
// ARBA raktažodžiu const 
const HOURS_IN_DAY = 24;
echo HOURS_IN_DAY, "\n", DAYS_IN_YEAR;

// "string" + "\n";
// "stringstring \n";

//DUOMENŲ TIPAI:
// STRING
// INTEGER
// FLOAT/DOUBLE (FLOATING POINT NUMBERS)
// 

// String = tekstas
$name = "Tomas";
// Integer - skaičius
$age = 20; 
// Float/double - skaičius su vertėm po kablelio.
$grade = 9.5;
//Boolean - true/false
$isMarried = true;
// NULL - vertės nebuvimas
$profession = NULL; 
//Array
//Indexed Array
$hobbies = [
    "reading",
    "gaming",
    "football",
];
//MASYVO NEGALIMA IŠ-ECHO-INTI!! Jį galima atvaizduoti tik tokiu būdu: 
print_r($hobbies);
var_dump($hobbies); // atvaizduoja viso masyvo informaciją - duomenų tipus, ilgius etc.
var_dump($name);

//Associative
$car = [
    "make" => "VW",
    "model" => 'Passat',
    "year" => 1999,
];

//  Object
// Pirmiausia klasė, pavadinimu Person

class Person
{
    public string $firstName = '';
    public string $lastName = '';

    public function __construct($fName, $lName){
        $this->firstName = $fName;
        $this->lastName = $lName;
    }

    public function hello(){
        return "Hello 'friend' {$this->firstName} {$this->lastName}";
    }
}
;

$person = new Person('Mantas','Mantauskas');

var_dump($person);
var_dump($person->hello());

$person = new Person();
$person->firstName = "Mantas";
$person->lastName = "Patrauskas";

var_dump($person->hello());
?>
