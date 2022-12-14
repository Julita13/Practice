<?php

//STRINGS
//Viengubos kabutės. Tekstas atvaizduojamas toks koks parašomas tarp kabučių,
//Išskyrus escapint kabutes arba slash \' ir \\.
$phpString = 'PHP - is\'t awesome';
// $phpString = "PHP - is't \"asdasd\" awesome";
$phpString = 'Me like\\\'s pic\a!';

$name = 'Vida';
$statement = $name . ' ' . 'like\\\'s pic\a!';
echo $statement;

//Dvigubos kabutės. "Parsinamos" - skaidomas ir analizuojamas.
//Galima rašyti kintamuosius į stringą.
$language = 'JS';
$food = 'hotdogs';
$statement = "I love {$language} and {$food}.";
// $statement = 'I love ' . $language . ' and ' . $food;

//Norite įterpti vertę iš masyvo rašoma taip:
$array = [
    'PHP',
    'JS',
    'CSS'];

$assocArray = [
    'make' => 'VW',
    'model' => 'Passat',
    'year' => 1999,
];
$food = 'fish';
$statement = "I hate {$array[2]} and {$food}.";

$statement = "I hate {$assocArray['make']} and $food.";
$statement = "I hate $assocArray[make] and $food.";


// \' – To escape ' within the single-quoted string.
// \” – To escape “ within the double-quoted string.
// \\ – To escape the backslash.
// \$ – To escape $.
// \n – To add line breaks between strings.
// \t – To add tab space.
// \r – For carriage return.

echo "\nŠiandiena labai graži diena!\n\tTikrai nesninga.";
var_dump($statement);


// https://www.php.net/manual/en/language.operators.php

//ARITMETINIAI
var_dump(4 + 4);
var_dump(4 - 4);
var_dump(4 * 4); 
var_dump('4' / '3');//grąžina int arba float, jei nesidalina lygiai
var_dump(4 % 4); //Modulo - grąžina dalybos liekaną
var_dump(4 ** 4); //Eksponentas
// echo gettype(4 / '2');
echo gettype('2');
var_dump(is_numeric('2a'));

//Priskyrimo operatorius "="
$favFood = 'Pica';

//Kombinuoto priskyrimo operatoriai

//Po lygybės ne perrašo, o prijungia prie
//egzistuojančio kintamojo vertės ir 
//rezultatą priskiria kaip naują kintamojo vertę 

//Kombinuoto priskyrimo operatorius stringams ".=" 
$favFood .= 'Jėga!';
// $favFood = $favFood.'Jėga!';
var_dump($favFood);

//Aritmetinis kombinuoto priskyrimo operatorius"+="
$number = 5;

// $number = $number + 5;
$number += 5;

// $number = $number - 1;
$number -= 1;

// $number = $number * 3;
$number *= 3;

// $number = $number ** 4;
$number **= 4; //eksponentas

// $number = $number % 5;
$number %= 5; //Modulo, grąžina liekaną

var_dump($number);

//PALYGINIMO
echo PHP_EOL . "PALYGINIMO OP \n\n";

//Palyginus vertes grįžta bool tipo atsakymas - true/false 
//Griežtas(strict) lyginimas. Lyginamas ir duomenų tipas ir vertė
var_dump(1 === 1); //true
var_dump(1 === '1'); //false

//Laisvas(loose) lyginimas. Lyginamas tik vertė
var_dump(1 == '1'); //true
//Nelygu laisvas
var_dump(1 <> '2'); //true
var_dump(1 != '2'); //true
//Nelygu griežtas
var_dump(1 !== '1'); //true
//Mažiau
var_dump(5 < 7); //true
//Dagiau
var_dump(10 > 10); //false
//Mažiaus arba lygu
var_dump(1 <= 1); //true
//Dagiau arba lygu
var_dump(30 >= 29); //true

//Erdvėlaivis. Rezultatas yra skaičius int.
//kurio verte gali būti vienas iš šiu variantų:
//1.skaičius mažesnis už 0 (rezultatas -1)
//2.skaičius lygus 0       (rezultatas 0)
//3.skaičius didesnis už 0 (rezultatas 1)

//Atitinkamai jeigu: 
//1.$a < $b
//2.$a == $b
//3.$a > $b

$a = 40;
$b = '30';
var_dump($a <=> $b);

//LOGINIAI
// https://www.php.net/manual/en/language.operators.logical.php
echo PHP_EOL . "LOGINIAI OP \n\n";
$c = true;
$d = false;
//AND
var_dump($c && $d); //false - išraiška true, jei abu kintamieji yra true; 
var_dump($c AND $d);
//OR
var_dump($c || $d); //true - išraiška true, jei $c arba $d yra true
var_dump($c OR $d);

//Not
//not true yra false, not false yra true
var_dump(!$c); //false
var_dump(!$d); //true

//Truthy falsy
echo PHP_EOL . "Truthy falsy \n\n";
//PHP sąlygose vertinama boolean true arba false
//Bet jei paduota vertė nėra boolean php
//bandys išraiškas įvertinti kaip true arba false
//Tai vadinama truthy arba falsy
//Reiškia, jei nėra vertinama griežta lygybe
//bet kokia NE TUŠČIA vertė laikoma true
//bet kokia TUŠČIA VERTĖ laikoma false 

//Tuščios vertės yra:
//1. null,
//2. 0,
//3. [], 
//4. '', 
//Falsy
//Teiginys yra falsy, kai sąlygoje yra vertinama
//tuščia vertė
var_dump(null == true); //false
var_dump(0 == false); //true
var_dump([] == false); //true
var_dump('' == false); //true

//TRUTHY
//Teiginys yra truthy, kai sąlygoje
//įrašyta vertė, kuri nėra laikoma tuščia, t.y.: NE šios:
//1. null,
//2. 0,
//3. [], 
//4. '',  
var_dump('aaa' == false);   //false
var_dump(25 == true);       //true
var_dump(['123'] == false); //false

//Sąlyga
if(true){
    echo 'TRUE';
}else{
    echo 'FALSE';
}
echo "\n|--------------------------------------------------------------|\n";

if(null){
    echo 'TRUE';
}else{
    echo 'FALSE';
}

echo "\n|--------------------------------------------------------------|\n";
if(![]){
    echo 'TRUE';
}else{
    echo 'FALSE';
}

echo "\n|--------------------------------------------------------------|\n";
if('Monika'){
    echo 'TRUE';
}else{
    echo 'FALSE';
}

echo "\n|--------------------------------------------------------------|\n";

if($favFood && Null){
    echo 'TRUE';
}else{
    echo 'FALSE';
}
echo "\n|--------------------------------------------------------------|\n";

if(Null){
    echo 'TRUE';
}else{
    echo 'FALSE';
}

echo "\n|--------------------------------------------------------------|\n";

class TruthyFalsy
{
    public function test(){
        return [];
    }
}

$truthyFalsy = new TruthyFalsy();

if($truthyFalsy->test()){
    echo 'TRUE';
}else{
    echo 'FALSE';
}

echo "\n|--------------------------------------------------------------|\n";

$array = [];
// $array[] = 15;

if($array){
    echo "First ARRAY value is {$array[0]}";
}else{
    echo 'ARRAY IS EMPTY';
}

echo "\n|--------------------------------------------------------------|\n";

$string = '';
// $string = 'LABAS';

if($string){
    echo "String value is {$string}";
}elseif(NULL){

}else{
    echo 'Sring IS EMPTY';
}