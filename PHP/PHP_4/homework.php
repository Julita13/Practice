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


?>