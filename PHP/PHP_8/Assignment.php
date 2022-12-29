<?php

function getCities(): array
{
    return [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        [
            'name' => 'Delhi',
            'population' => 29399141,
        ],
        [
            'name' => 'Shanghai',
            'population' => 26317104,
        ],
        [
            'name' => 'Sao Paulo',
            'population' => 21846507,
        ],
        [
            'name' => 'Mexico City',
            'population' => 21671908,
        ],
        [
            'name' => 'New York',
            'population' => 25000000,
        ],
    ];
};

// 1.1
/*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami paprastu 'foreach' ir grąžinkite ją iš funkcijos.
    Miestus pasiimkite iškvietę funkciją 'getCities'
*/

function exercise1(): int{
    $cities = getCities();
    $a = 0;
    foreach($cities as $city){
        $a += "$city[population]";
    };
    return $a;
};

echo "1.1 pratimas\n"; 
echo (exercise1())."\n\n";



// 1.2
/*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcijomis array_column ir array_sum
    ir grąžinkite ją iš funkcijos
*/

function exercise2(): int{
    $cities = getCities();
    $totalPopulation = array_column($cities, 'population');
    return array_sum($totalPopulation);
};

echo "1.2 pratimas\n";
echo (exercise2())."\n\n";


// 1.3
/*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcija array_reduce ir grąžinkite ją iš funkcijos
*/
function exercise3(): int {
    $cities = getCities();
    $sum = array_reduce($cities, function ($carry, $city) {
        if (array_key_exists("population", $city)) {
            $carry += $city["population"];
        }
        return $carry;
    });
    return $sum;
};

echo "1.3 pratimas\n";
echo (exercise3())."\n\n";


// 1.4
/*
    Suskaičiuokite populiaciją miestų, kurie yra didesni nei 25,000,000 gyventojų.
    Rinkites sau patogiausią skaičiavimo būdą.
*/
function exercise4(): int{
    $cities = getCities();
    $b = 0;
    foreach($cities as $city){
        if($city["population"] > 25000000){
            $b += "$city[population]";
        }
    };
    return $b;
};

echo "1.4 pratimas\n";
echo (exercise4())."\n\n";

// 1.5
/*
    Grąžinkite masyvą, kuriame būtų tik tie miestai, kurie yra didesni nei 25,000,000 gyventojų
    Rezultatas turi būti tokios pat struktūros, kaip ir pradinis miestų masyvas:
    [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        ...
*/
function exercise5(): array{
    $cities = getCities();
    $newArray = array_filter($cities, function($compare) {
        return $compare["population"] > 25000000;
    });
    return $newArray;
};

echo "1.5 pratimas\n";
print_r(exercise5())."\n\n";

 /*
2. Parašykite funkciją, kuris grąžins šią figūrą. Panaudokite ciklus.
*
**
***
****
*****
******
*******
******
*****
****
***
**
*
*/

/*
3. Parašykite funkciją, kuri grąžina tokį stačiakampį. Matmenys turi būti perduodami parametrais. Panaudokite ciklus.
$length = 5;
$height = 4;
*  *  *  *  *
*  *  *  *  *
*  *  *  *  *
*  *  *  *  *
*/

/*
4. Parašykite funkciją, kuri grąžina kiekvieno sveiko skaičiaus daliklius.
Pvz.: nuo  1 iki 12 būtų:
1:
2: 1
3: 1
4: 1 2
5: 1
6: 1 2 3
7: 1
8: 1 2 4
9: 1 3
10: 1 2 5
11: 1
12: 1 2 3 4 6
...

Panaudokite ciklus.
Ribas perduokite parametrais.
*/

?>