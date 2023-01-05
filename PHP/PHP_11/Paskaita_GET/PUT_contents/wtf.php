<?php 


//WRITE TO FILE

//GET CONTENTS 

// Gauti failo turinį strinf formatu. Tai paprasčiausias būdas gauti turinį į stringą, yra naudojant
// file_get_contents() funkciją. 

// Šia funkcija galima paimti turinį iš internetinio tinklapio ar vietinio failo. 

$filePath = __DIR__."/test.txt"; 
$content = file_get_contents($filePath);
echo "<p>$content</p>";

// PUT CONTENTS

//Funkcija naudojama įrašyti failus. Atlieka tą patį, ką ir funkcijos fopen(), fwirte(), ir fclose(). 
//Jei failas neegzistuoja, jis yra sukuriamas. Jei egzistuoja, failas yra perrašomas. 

$filePath2 = __DIR__ . '/friends.txt';
file_put_contents($filePath2, "Romas, Rimas, Rūta"); 
file_put_contents($filePath2, "Tomas, Viktorija, Liūdas"); 
file_put_contents($filePath2, "There are no new names"); 

//REDAGUOTI TURINĮ

// 1. Atidaromas failas ir gaunamas jo turinys. 
$content = file_get_contents($filePath2);
// echo $content;

//Papildomas stringas

$content .= ', tikrai tikrai';
echo $content;
file_put_contents($filePath2, $content);


?>