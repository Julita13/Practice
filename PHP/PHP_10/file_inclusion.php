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

?>

