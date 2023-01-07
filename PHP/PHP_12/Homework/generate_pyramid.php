<!-- 
    6. Pratimas
    Išspausdinkite šią struktūrą. 
    Sukurti 1 failą generate_pyramid.php.
    Failas turi linką generate, kuris veda į tą patį puslapį, su parametru generate=true.
    Paspaudus linką perkraunamas puslapis su parametru ir išspausdinama figura. 
----------------1----------------
--------------2***2--------------
------------3***3***3------------
----------4***4***4***4----------
--------5***5***5***5***5--------
------6***6***6***6***6***6------
----7***7***7***7***7***7***7----
--8***8***8***8***8***8***8***8--
9***9***9***9***9***9***9***9***9
-->

<?php 


//figūra dar nebaigta - laiko trūkumas daro savo :) bet užduoties esmė lyg ir atlikta
function generatePyramid($myNumber):void {
    for ($i = 1; $i <=$myNumber; $i++){
        for ($j = 1; $j < $myNumber + $i; $j++) {
            if ($j >= $myNumber - $i + 1) {
                echo $i;
            } else {
                echo "-";
            }
        }
        echo "<br>";
    }
};

if(isset($_GET['generate'])){
    echo generatePyramid(9)."\n"; //2ia reikia įrašyti naują funkciją su piramide
    echo "<a href='generate_pyramid.php'>Reset</a>";
} else {
    echo "<a href='generate_pyramid.php?generate=true'>Generate!</a>";
};

?>

