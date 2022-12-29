// 1.
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
}

// 1.1
function exercise1(): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami paprastu 'foreach' ir grąžinkite ją iš funkcijos.
    Miestus pasiimkite iškvietę funkciją 'getCities'
    */

    return 0;
}

// 1.2
function exercise2(): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcijomis array_column ir array_sum
    ir grąžinkite ją iš funkcijos
    */

    return 0;
}

// 1.3
function exercise3(): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcija array_reduce ir grąžinkite ją iš funkcijos
    */

    return 0;
}

// 1.4
function exercise4(): int
{
    /*
    Suskaičiuokite populiaciją miestų, kurie yra didesni nei 25,000,000 gyventojų.
    Rinkites sau patogiausią skaičiavimo būdą.
    */

    return 0;
}

// 1.5
function exercise5(): array
{
    /*
    Grąžinkite masyvą, kuriame būtų tik tie miestai, kurie yra didesni nei 25,000,000 gyventojų
    Rezultatas turi būti tokios pat struktūros, kaip ir pradinis miestų masyvas:
    [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        ...
    ]
    */

    return [];
}


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