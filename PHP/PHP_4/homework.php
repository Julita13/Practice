<?php
//1. Pratimas
// Išspausdinkite skaičius nuo 1 iki 10 naudodamiesi ciklu. Panaudokite visus 4 būdus ciklams aprašyti.
// Kiekvienas skaičius turi išspausdintas naujoje eilutėje.

// for($i = 1; $i <= 10; $i++){
//     echo $i."\n";
// }

// 2. Pratimas
//Išspausdinkite skaičius nuo 15 iki 3 naudodamiesi ciklu. Panaudokite sau patogiausią ciklą.
//Kiekvienas skaičius turi išspausdintas naujoje eilutėje.

// for($i = 15; $i >= 3; $i--){
//     echo $i."\n";
// }

// 3. Pratimas
// Išspausdinkite kas antrą skaičių nuo 1 iki 20 naudodamiesi ciklu.
// Kiekvienas skaičius turi būti išspausdintas naujoje eilutėje.
// 1
// 3
// 5
// ...
// */

// for($i = 1; $i <= 20; $i+=2){
//     echo $i."\n";
// }

// 4. Pratimas
//  Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3.
// Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
// */

// for($i = 1; $i <= 20; $i++){
//     if ($i % 3 == 0) {
//         echo $i."\n";
//     }
// }

// 5. Pratimas
// for($i=1; $i<=20;$i++){
//     if ($i % 3 == 0|| $i % 5 == 0) {
//     }else{
//             echo "$i \n";
//         }
//     }


//6. Pratimas 
//Raskite sveikų skaičių nuo 1 iki 100 sumą.

// $n = 100;

// $sum = $n*($n+1)/2;
// echo "Sum is: $sum";

// //arba: 
// $n = 100;
// $sum2 = 0;

// for ($i = 1; $i <= $n; $i++) {
//     $sum2 += $i;
// }

//   echo "Sum is: $sum2";

//7.Pratimas
// Pasinaudodami ciklu išspausdinkite savaitės dienas iš masyvo $days vienoje eilutėje:
// monday-tuesday-wednesday-thursday-friday-saturday-sunday-
// 

// $days = [
//     'monday',
//     'tuesday',
//     'wednesday',
//     'thursday',
//     'friday',
//     'saturday',
//     'sunday',
// ];

// foreach($days as $day){
//     echo $day."-";
// }

//9.Pratimas
// Foreach'inkite per masyvą ir išspausdinkite jame esančias eilutes.
// Jeigu iteracijos tekstas yra vienas iš: '/', '*' arba '()', jo nespausdinkite, teskite iteraciją.
// Jeigu interacijos tekstas yra lygus '---', teksto nespausdinti, o ciklas turėtų nutrūkti.
// Užduočiai atlikti naudokite 'continue' ir 'break'.
$items = [
    'Lazy',
    '/',
    'fox',
    'jumps',
    '*',
    'over',
    'the',
    '()',
    'lazy',
    'dog',
    '---',
    'this',
    'should',
    'not',
    'be',
    'printed',
    'or',
    'iterated',
];

// foreach($items as $item){
//     if ($item === "/" || $item === "*" || $item === "()") {
//         continue;
//     } elseif($item === "---"){
//         break;
//     }
//     echo $item . "\n";
// }

//10.Pratimas
// 10. Iteruokite per skaičius, nuo 1 iki 20.
// Jeigu skaičius dalijasi iš 3, išspausdinkite žodį 'Hey'.
// Jeigu skaičius dalijasi iš 5, išspausdinkite žodį Ho'.
// Jeigu skaičius dalijasi ir iš 5, ir iš 3, išspausdinkite žodį 'HeyHo'.
// Kitu atveju išspausdinkite skaičių.
// Viskas turi būti atspausdinta vienoje eilutėje su tarpais:
// 1 2 Hey 4 Ho Hey 7 8 Hey Ho 11 Hey 13 14 HeyHo 16 17 Hey 19 Ho

// for($i = 1; $i <= 20; $i++){
//         if ($i % 3 === 0 && $i % 5 === 0) {
//             echo "HeyHo"." ";
//         } elseif($i % 3 === 0){
//         echo "Hey"." ";
//         } elseif($i % 5 === 0){
//         echo "Ho"." ";
//         } else {
//         echo $i." ";
//         }
//     }

//11. Pratimas
// Pasinaudodami ciklais, išspausdinkite lentelę, kurioje nelyginiai skaičiai yra žvaigždutės.
// Parašykite kodą taip, kad jis su menkais pakeitimais veiktų ir tuo atveju, jeigu reiktų spausdinti
// ne iki 20, bet iki kito dviženklio skaičiaus (pvz. 90).
// *  |2 |* |4 |*
// 6 |* |8 |* |10
// * |12|* |14|*
// 16|* |18|* |20

for($i=1; $i<=20; $i++){
    if($i%2 === 0) {
        echo "|$i";
    } else {
        echo "|*"; 
    }
}
// $num = 20;
// for ($i = 1; $i <= 10; $i++){
//     echo "<tr>";
//         for($j = 1; $j <= $num; $j++){
//         echo "<td>$j</td>";
//         }
//     echo "</tr>";
// }


echo "\n\n";
//12. Pratimas
// Turite dvimatį masyvą su informacija apie jūsų mėgstamus aktorius. Kiekvieno masyvo elemento vertė yra asociacinis masyvas,
// reprezentuojantis vieną aktorių. Informacija apie aktorių yra tokia:
   
// first_name
// last_name
// date_of_birth
// place_of_birth
// nationality
// best_movies

// Užpildykite masyvą su bent 3 aktorių informacija.

// Naudojant foreach ciklą išspausdinkite info blokus apie kiekvieną aktorių, pvz.:

// Ryan Reynolds
// Kanados-Amerikos aktorius
// Gimtinė - Vankuveris, Britų Kolumbija, Kanada
// Metai- 46(gimė 1976)
// Geriausi filmai - "The Adam Project", "Deadpool", "Free guy"

$actors = [
    [
        'first_name' => 'Ryan',
        'last_name' => 'Reynolds',
        'date_of_birth' => '1976',
        'place-of_birth' => 'Vancouver, British Columbia, Canada',
        'nationality' => 'Canadian',
        'best_movies' => ['The Adam Project', "Deadpol", "Free Guy"],
    ],
    [
        'first_name' => 'Leonardo',
        'last_name' => 'DiCaprio',
        'date_of_birth' => '1974',
        'place-of_birth' => 'Los Angeles, CA, United States of America',
        'nationality' => 'U.S.A.',
        'best_movies' => ['Titanic', "Inception", "The Aviator"],
    ],
    [
        'first_name' => 'Anthony',
        'last_name' => 'Hopkins',
        'date_of_birth' => '1967',
        'place-of_birth' => 'Port Talbot, Glamorgan, Wales, United Kingdom',
        'nationality' => 'UK',
        'best_movies' => ['Hannibal', "Meet Joe Black", "Instinct"],
    ],
];

foreach ($actors as $actor) {
    echo "{$actor["first_name"]} {$actor["last_name"]}\n";
    echo "{$actor["nationality"]} aktorius \n";
    echo "Gimtinė - {$actor["place-of_birth"]}\n";
    $birthdate = $actor["date_of_birth"];
    $age = date_diff(date_create($birthdate), date_create('now'))->y;
    // echo $age;
    echo "Metai - $age (gimė $birthdate metais)\n";
    echo "Geriausi filmai - ";
    foreach($actor["best_movies"] as $movie) {
        echo "\"$movie\", ", "";
    }
    echo "\n\n";
}

?>


