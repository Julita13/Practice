<?php

/* 1. Pratimas
Įrašykite skaičius nuo 0 iki 10 į failą pavadinimu numbers.txt.
Kiekvienas skaičius turi būti įrašytas naujoje eilutėje.
*/

function exercise1(): void
{
    $numbers = __DIR__ . '/numbers.txt';
    $content = "";
    for ($i = 0; $i <= 10; $i++) {
        $content .= $i . "\n";
    }
    file_put_contents($numbers, $content);
}
;

exercise1();

/* 2. Pratimas
Įrašykite visus transporto priemonių pavadinimus į failą vehicles.txt.
Kiekvienas pavadinimas turi būti įrašytas naujoje eilutėje.
*/
function exercise2(): void
{
    $listOfVehicles = __DIR__ . '/vehicles.txt';
    $newContent = "";
    $vehicles = [
        [
            'type' => 'passenger car',
            'name' => 'Honda Civic',
            'weight' => 1550

        ],
        [
            'type' => 'airplane',
            'name' => 'Boeing 737',
            'weight' => 41410
        ],
        [
            'type' => 'airplane',
            'name' => 'Cessna DC-6',
            'weight' => 1300
        ],
        [
            'type' => 'truck',
            'name' => 'Volvo FH16',
            'weight' => 12500
        ],
        [
            'type' => 'truck',
            'name' => 'MB Actros',
            'weight' => 13000
        ],
        [
            'type' => 'passenger car',
            'name' => 'VW Golf',
            'weight' => 1450
        ],
    ];
    foreach ($vehicles as $vehicle) {
        // $newContent .= $vehicle['type'] . ": " . $vehicle['name'] . "." . "\n";
        $newContent .= $vehicle['name'] . "\n";
    }
    ;
    file_put_contents($listOfVehicles, $newContent);
}
;

exercise2();

/* 3. Pratimas
Perskaitykite visus tr. priemonių pavadinimus iš failo vehicles.txt,
sudėkite juos į masyva ir grąžinkite iš funkcijos.
[
'Honda Civic',
'Boeing 737',
]
*/
function exercise3(): array
{
    $filePath = __DIR__ . "/vehicles.txt";
    $content = file_get_contents($filePath);
    $finalResult = explode("\n", $content);
    return array_filter($finalResult);
}
;

print_r(exercise3());

//4.Pratimas
//Įrašyti MASYVĄ į JSON formato failą. vehicles_database.json. 
function exercise4(): void
{
    $vehicles = [
        [
            'type' => 'passenger car',
            'name' => 'Honda Civic',
            'weight' => 1550

        ],
        [
            'type' => 'airplane',
            'name' => 'Boeing 737',
            'weight' => 41410
        ],
        [
            'type' => 'airplane',
            'name' => 'Cessna DC-6',
            'weight' => 1300
        ],
        [
            'type' => 'truck',
            'name' => 'Volvo FH16',
            'weight' => 12500
        ],
        [
            'type' => 'truck',
            'name' => 'MB Actros',
            'weight' => 13000
        ],
        [
            'type' => 'passenger car',
            'name' => 'VW Golf',
            'weight' => 1450
        ],
    ];
    $fourthTask = __DIR__ . '/vehicles_database.json';
    $json = json_encode($vehicles, true); // nėra iki galo aišku, ką daro tas json
    file_put_contents($fourthTask, $json);
}
;

exercise4();


/* 5.Pratimas
Perskaitykite failo vehicles_database.json turinį, paverskite jį į masyvą ir grąžinkite iš funkcijos.
*/
function exercise5(): array
{
    $filePath = __DIR__ . "/vehicles_database.json";
    $newVehicles = file_get_contents($filePath);
    $result = json_decode($newVehicles, true);
    return $result;
}

print_r(exercise5());

//6.Pratimas
   /*
    Perskaitykite failo vehicles_database.json turinį, paverskite jį į masyvą ir grąžinkite iš funkcijos.
    *
    /*
    Žingsniai:
    - perskaitykite failo vehicles_database.json turinį
    - paverskite turinį į masyvą
    - į masyvą pridėkite naują elementą ($newVehicle)
    - vėl išsaugokite visą masyvą faile vehicles_database.json
    */

function exercise6(): array
{
    $newVehicle = [
        'type' => 'plane',
        'name' => 'Airbus A320',
        'weight' => 39500,
    ];
    $filePath = __DIR__ . "/vehicles_database.json";
    $oldVehicles = file_get_contents($filePath);
    $result = json_decode($oldVehicles, true);
    array_push($result, $newVehicle);
    file_put_contents($filePath, json_encode($result));
    return $result;
}

var_dump(exercise6());
?>