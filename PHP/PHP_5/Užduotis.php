<?php
//1.Pratimas
for($i = 0; $i <= 10; $i++)
    {
        for($j = 10 - $i; $j >= 0; $j--){
        echo "*";
    }
echo "\n";
}

//2.Pratimas
//Sukurti funkciją, kuri priima 1 parametrą $number.
//Pagal šį parametrą funkciją grąžina stringą sudėtą
//iš tarpų \n. pvz jei $number = 10, tai bus 10 tarpų.

function myFn(int $number): string{
    $a = "";
    for($i = 0; $i < $number; $i++){
        $a .= "\n";
    }
    return $a;
}

var_dump(myFn(5));


function pirmas(int $number):string{
    $i = 0;
    $a = ""; 
    while($i < $number){
        $a .= "a";
        $i++;
    }
    return $a;
}

echo pirmas(3);


//Andriaus atsakymas: 
function lotsOfNewLines($howMany) {
    $newLines = "";
    for ($i = 0; $i < $howMany; $i++) {
        $newLines .= "\n";
    }
    return $newLines;
}
echo "\nAll I need is" . lotsOfNewLines(5) . "more newLines.";