<?php
//1 Užduotis
//Naudojant ciklą, išspausindinti lyginius ir nelyginius skaičius

// for ($i=2; $i<=100; $i+=2){   
//     echo $i." ";
// } 

// Lyginiai:
// for ($x=0; $x<=100; $x++){
//     if($x%2==0){
//     echo $x.", ";
//     } 
// }

//Eglės sprendimas: 
// $even = 'Even Numbers are:';
// $odd = 'Odd Numbers are:';

// for ($i = 1; $i <= 20 ; $i++) {
//     if ($i%2 == 0) {
//         $even.=$i.",";
//     } else {
//         $odd.=$i.",";
//     }

// }
// echo $even.$odd;


//Mykolo sprendimas: 
// for ($i = 0; $i <= 20; $i++) {
//     if ($i % 2) {
//         echo "Nelyginis - $i\n";
//     } else {
//         echo "Lyginis - $i\n";
//     }
// }

// //1 lyginius ir nelyginius

// $a = 0;
// while ($a <= 10) {
//     echo "$a\n";
//     $a += 2;
// }

// $b = 1;
// while ($b <= 10) {
//     echo "$b\n";
//     $b += 2;
// }

// $i = 0;
// for ($i = 0; $i < 10; $i++) {
//     if ($i % 2) {
//         echo "Nelyginis - $i\n";
//     } else {
//         echo "Lyginis - $i\n";
//     }
// }


// $i = 0;
// $odd = '';
// $even = '';
// for ($i = 0; $i < 10; $i++) {
//     if ($i % 2) {
//         $odd .= " $i ";
//     } else {
//         $even .= " $i ";
//     }
// }

// echo "Nelyginiai: $odd\n";
// echo "Lyginiai: $even\n";

//Nu ir dar vienas: 

// $even= "";
// $odd= "";

// for($i = 0; $i <= 20; $i++){
//     if($i % 2 == 0){
//         $even.=$i.","." ";
//     } else $odd.=$i.","." "; 
// }  

// echo "Lyginiai: $even Nelyginiai:  $odd"; 


//2 Užduotis Ištraukti lyginius ir nelyginius iš ciklo naudojant 2 masyvą. Ir naudojant 2 foreach kiekvienam masyvui.

$odd=[];
$even=[];

for($i=0; $i<=10; $i++){
    if($i % 2){
        $odd[] = $i;
    }else{
        $even[] = $i;
    }
}
foreach($odd as $item){
    echo "Nelyginiai $item \n";
}
foreach($even as $item2){
        echo "Lyginiai $item2 \n";
    }


?>