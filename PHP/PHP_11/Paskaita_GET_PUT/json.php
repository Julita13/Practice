<?php

//JSON = JavaScript Object Notation
//Paversti į json formatą - tam naudojam json_encode() funkciją. 
//Paverčia masyvą į stringą. 

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
//Masyvas pavirsta į stringą:
$vehicles = json_encode($vehicles);

echo $vehicles;

// JSON stringas pavirsta atgal į masyvą arba objektą, 

$vehiclesObject = json_decode($vehicles);
$vehiclesArray = json_decode($vehicles, true); // jei prirašai true, gauni array'ų. Jei neprirašai, gauni objektą. 
?>

<!-- 
<pre><?=print_r($vehiclesObject, true) ?></pre>;
<pre><?=print_r($vehiclesArray, true) ?></pre>; -->

