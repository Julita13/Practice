<?php
/*

1. FAILO ĮTRAUKIMAS. 

Pritraukti failams naudojami 4 raktažodžiai(kalbos konstruktai):
include/include_once ir require/require_once.

(a)
include - įtrauktia failą. Galima įtraukti pakartotinai.
include_once - įtraukia failą tik 1 kartą. 
Kitus kartus failo į traukimas nedaromas.

Nesant pritraukiamam failui, išmetamas PHP perspėjimas (WARNING), 
bet kodas vykdomas toliau.

(b)
require_once ir require - įtraukia failus kaip ir include.
Neradus failo, php meta kritinę klaidą (FATAL ERROR) ir kodas toliau nevykdomas.

Tiek include, tiek require padaro failo turinį prieinamą nuo tos vietos, kurioje panaudojami.
Pritrauktojo failo turinys taps įtraukiančiojo failo kodo dalimi,
galės dalintis funkcijomis ir kintamaisiais.
*/
//bloga nuoroda. Warning

include "../test.php";
include "./test.php";

echo $test;

//kadangi jau įtraukta, nebeįtrauks failo
include_once "./test.php";

//require FATAL ERROR, toliau kodo nevykdo
// require "../test.php";
require "./test.php";

require_once "./test.php";

/*
2. NUORODOS Į FAILĄ.

Kad failą pritraukti, reikia nurodyti jo buvimo vietą.
Nurodant failo būvimo vietą vadovajamasi tomis pačiomis taisyklėmis, kaip ir terminale.

(a)
Relative path – reliatyvus kelias, tai nuoroda nuo dabartinio failo buvimo vietos (current directory).
Reliatyvus kelias gali būti aprašomas naudojant simbolius ./ (current directory) ir ../ (parent directory)
/ - pradinė direktorija(root). 
./ - dabartinė direktorija(current)
../ - viena atgal 
../../ - dviem atgal 
../../../ - trimis atgal ir t.t. 

PASTABA: kada reliatyvios nuorodos yra ĮTRAUKIAMUOSE failuose,
jos skaitomos nuo PRADINIO ĮTRAUKIANČIO failo vietos. 
Todėl pradžios failas(tas failas, kuris bus PALEIDŽIAMAS),
apsręs visų įtrauktų failų grandinėje esančių realiatyvių nuorodų skaitymą. 

PVZ.:
Paleidus failą A, kuris turi įtraukęs failą B, o šis - failą C, 
visuose failuose A, B IR C esančios reliatyvios nuorodos bus skaitomos nuo failo A BUVIMO VIETOS!!!

Taisyklė - visos reliatyvios nuorodos bus skaitomos nuo to failo, kurį paleidote!

(b)
Absolute path - nurodyti pilną kelią iki failo, pvz.:
include "C:\project\example\index.php"; 
require "C:\project\example\index.php"; 

Būdai nustatyti absoliutų kelią
https://www.php.net/manual/en/language.constants.magic.php#:~:text=__DIR__,it%20is%20the%20root%20directory.

*/
// __FILE__ -  grąžina kelią įskaitant ir failo pavadinimą. Naudojam su dirname() funkcija.
echo '<br>';
echo '__FILE__: <br>';
echo __FILE__;

//dirname("C:\Users\justm\Sharing\OneDrive\Documents\fullstack_pamokos\programavimo_pamokos", 5) - grąžina direktoriją tiek lygiu atgal, kiek nurodoma. Default - 1.
echo '<br>';
echo 'dirname(): <br>';
echo dirname("C:\Users\justm\Sharing\OneDrive\Documents\\fullstack_pamokos\programavimo_pamokos\labas", 2);
echo '<br>';
echo dirname(__FILE__);

// __DIR__ grąžina ABSOLIUTŲ kelią iki failo. Naudojama vietoje dirname(__FILE__) nuo 5.3.0 versijos.
echo '<br>';
echo __DIR__;

/*
Patogiausia naudoti __DIR__ konstantą, nurodant failus direktorijas.
__DIR__ konstanta visada nurodys absoliutų kelią iki failo, kuriame ji naudojama, nepaisant to,
ar failas yra pritrauktas ir paleistas iš kito failo.

vietoj include './index.php'; -  include __DIR__ . '/index.php'; - current dir
vietoje include '../index.php' - include __DIR__ . '/../index.php'; - parent dir
vietoje include '../../index.php' - include __DIR__ . '/../../index.php'; - parent parent dir

*/ 
// Įtraukti red su include_once
 $n = 1;
//  include_once __DIR__ . "/../BLOCKS/red_block.php";
 // Pakartotinai įtraukti red su include_once
 $n = 2;
 include_once __DIR__ . "/BLOCKS/red_block.php";
// Įtraukti red dar 2 kartus su include, vienas su blogu keliu
 $n = 3;
 include __DIR__ . "/BLOCKS/red_block.php";
 $n = 4;
 include __DIR__ . "/BLOCKS/red_block.php";

 // Įtraukti blue su require_once
 //Neįtrauks, nes yra includinta
$n = 1;
$color = "#3737e2";
require_once __DIR__ . "/BLOCKS/red_block.php";

//Requirinam kitą failą
// $n = 2;
// require_once __DIR__ . "/../BLOCKS/blue_block.php";
// // Įtraukti red dar 2 kartus su include, vienas su blogu keliu
$n = 3;
require __DIR__ . "/BLOCKS/red_block.php";
$n = 4;
require  __DIR__ . "/BLOCKS/red_block.php";

?>