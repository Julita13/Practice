<?php 


// //Define
// $firstName = "Tomas"; 
// //Redefine/CamelCase
// $firstName = "Marius";

// $enumArray = [];
// $enumArray[] = [1, 2];
// print_r($enumArray);

// array_push($enumArray, 1, 2, 3, "one");
// print_r($enumArray);

$asoc = [
    'surname' => 'Norkus',
];

$asoc['name'] = 'Mykolas';
$asoc['job'] = 'programmer';
$asoc['hobbies'] = ['swimming', 'eating', 'gaming', 'sleeping'];
$asoc['vacations'] = ['Austria', 'Latvia', 'France'];

// print_r($asoc['vacations'][count($asoc['vacations'])-1]); // ištraukia paskutinę reikšmę iš masyvo

function whereAmI():string {
    echo "Nowhere";
    return "Buddy";
};

// $result = whereAmI();
// var_dump(whereAmI());
// var_dump($result);
// var_dump($result === whereAmI());

function whatsMyName(): string {
    $number = 2 + 2 + 2 + 2;
    $myName = "Vardenis Pavardenis $number";

    return $myName; 
}
;

// echo whatsMyName();


function addHobbies(string $myName):string {
    $hobbies = "tennis, swimming, walking, watching TV";
    $modified = $myName . '. My hobbies include: ' . $hobbies;
    return $modified; 
};

$myNiceName = whatsMyName();
echo addHobbies($myNiceName);

