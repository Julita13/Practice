<?php 
// Užduotis
/*1. Apsirašyti 5 kintamuosius - 4 string ir 1 int arba float.
2. Sukurti sakinį panaudojant visus kintamuosius ir kelis statinius stringus.
Sakinį suklijuoti naudojant taškinę notaciją.
3. Išsaugoti dar viename kintamajame(tarkim $result).

4. Išspausdinti sąkinį naudojant echo, print arba var_dump() terminale
*/

$name = "Julita";
$greeting = "Bonjour";
$done = "finally ready";
$favoriteFood = "burger";
$finalPrice = 9.5;

// $statement = "{$greeting}, {$name}! Your order is {$done}. Total cost of your {$favoriteFood}'s delivery is {$finalPrice}€";
// echo $statement;
// $result = "$greeting, $name! Your order is $done. Total cost of your $favoriteFood's delivery is $finalPrice €";
$result2 = ".$greeting., ".$name."! Your order is ".$done.". Total cost of your ".$favoriteFood."'s deliver is ".$finalPrice."€.";
$result3 = $greeting .",". " ". $name ."!". " " ."Your order is". " " . $done .".". " "."Total cost of your". " " .$favoriteFood."'s". " " ."delivery is". " ". $finalPrice . "€";
echo $result3;

?>