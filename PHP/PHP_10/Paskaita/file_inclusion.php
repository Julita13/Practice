<?php 


//1. FAILO ĮTRAUKIMAS

//Pritraukti failams naudojami 4 raktažodžiai (kalbos konstruktai): 
//include/include_once ir require/require_once. 

//(a) include 
//įtraukia failą. Galima įtraukti pakartotinai. 
//include_once - įtraukia failą tik vieną kartą. Kitus kartus failo įtraukimas nedaromas. Nesant pritraukiamam failui, išmetamas PHP perspėjimas (WARNING), bet kodas vykdomas toliau. 

//(b)
//require_once ir require - įtraukia failus kaip ir include. 
//Neradus failo, php meta kritinę klaidą (FATAL ERROR) ir kodas toliau nevykdomas. 

//Tiek include, tiek require padaro failo turinį prieinamą nuo tos vietos, kurioje panaudojami. 
//Protrauktojo failo turinys taps įtraukiančiojo failo kodo dalimi, galės dalintis funkcijomis ir kintamaisiais. 


//bloga nuoroda: 
// include "./test.php2"; // - išmeta warning'ą
include "./test.php";
// include "./test.php"; - atkartoja vėl tą patį failą
echo $test; 

include_once "./test.php";
//kadangi jau įtraukta, failas nebus įtrauktas DAR KARTĄ:
include_once "./test.php";

//klaidingas require meta FATAL ERROR, toliau kodo nebevykdo. 
// require "../test.php";
require "./test.php";


//2 NUORODOS Į FAILĄ

//Kad failą pritraukti, reikia nurodyti jo buvimo vietą. Ją nurodant vadovaujamasi tomis pačiomis taisyklėmis, kaip ir terminale. 

//(a) 
//Relative path - reliatyvus kelias, tai nuoroda nuo dabartinio failo buvimo vuetos (current directory).

// PASTABA: kada reliatyvios nuorodos yra ĮTRAUKIAMUOSE failuose, jos skaitomos nuo pradinio įtraukiančio failo vietos. 
//Todėl pradžios failas (tas failas, kuris bus paleidžiamas, apspręs visų įtrauktū failų grandinėje esančių reliatyvių nuorodų skaitymą. 

//PVZ: 
//Paleidus failą A, kuris turi įtraukęs failą B, o šis - failą C, visuose failuose A, B ir C esančios reliatyvios nuorodos bus skaitomos nuo failo 

//PAVYZDYS: UŽDUOTIS FOLDERYJE ABC

//Taisyklė: visos reliatyvios nuorodos bus skaitomos nuo to failo, kurį paleidote!!

//(b)
//Absolute path - nurodyti pilną kelią iki failo, pvz: 
//include "C:\project\example\index.php";

//Būdai nustatyti absoliutų kelią 

//_FILE_ - grąžina kelią, įskaitant ir failo pavadinimą. Naudojame su dirname() funkcija. 

echo "<br><br>";
echo "__FILE__: <br>";
echo __FILE__;
echo "<br>"; 

//Funkcija dirname() - grąžina direktoriją tiek lygiu atgal, kiek nurodoma. Default - 1; 
echo "dirname (): <br>"; 
echo dirname("C:\Users\Vegita\Desktop\Julita\Practice\PHP\PHP_10\file_inclusion.php", 1);

//__DIR__ grąžina absoliutų kelią iki failo. Naudojama vietoje dirname(__FILE__) nuo 5.3.0. versijos. 

echo "<br>"; 

//Patogiausias būdas - naudoti __DIR__ konstantą, nurodant failus direktorijas. Ji visada nurodys absoliutų kelią iki failo, 
//kuriame ji naudojama, nepaisant to ar failas pritrauktas ir paleistas iš kito failo. 


?>

