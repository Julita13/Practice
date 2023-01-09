
<?php 

// 6. Pratimas
// Išspausdinkite šią struktūrą. 
// Sukurti 1 failą generate_pyramid.php.
// Failas turi linką generate, kuris veda į tą patį puslapį, su parametru generate=true.
// Paspaudus linką perkraunamas puslapis su parametru ir išspausdinama figura. 
// ----------------1----------------
// --------------2***2--------------
// ------------3***3***3------------
// ----------4***4***4***4----------
// --------5***5***5***5***5--------
// ------6***6***6***6***6***6------
// ----7***7***7***7***7***7***7----
// --8***8***8***8***8***8***8***8--
// 9***9***9***9***9***9***9***9***9



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
    echo generatePyramid(9)."\n"; 
} else {
    echo "<a href='generate_pyramid.php?generate=true'>Generate!</a>";
};


// Andriaus sprendimas

function pyramid(): string {
    $tree = "";
    for ($i=1; $i < 10; $i++) {
        // $tree .= $i . ": ";
        for ($k=0; $k < (9 - $i)*2; $k++) {
            $tree .= "-";
        }
        for ($j=0; $j < $i; $j++) {
            $tree .= $j ? "***" . $i : $i;
        }
        for ($k=0; $k < (9 - $i)*2; $k++) {
            $tree .= "-";
        }
        $tree .= "\n";
    }
    return $tree;
}

echo pyramid();
?>

