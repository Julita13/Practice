<?php
include_once __DIR__ . "/helpers.php";

// SPRENDIMAS: 
function getSumOfAllNumbers(int $from, int $to): int
{
    $sum = 0;
    for ($i = $from; $i <= $to; $i++) {
        $sum += $i;
    }
    return $sum;
}

dump(getSumOfAllNumbers(1, 100));
echo "\n";

// Gražesnis - mano subjektyvia ir pedantiška nuomone - variantas: 

function getSumOfAllNumbers2(int $from, int $to): void
{
    $sum = 0;
    for ($i = $from; $i <= $to; $i++) {
        $sum += $i;
    }
    echo "Skaičių tarp " . $from . " ir " . $to . " suma: " . $sum;
}

getSumOfAllNumbers2(1, 100);


?>