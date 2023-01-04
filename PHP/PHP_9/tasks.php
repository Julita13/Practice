<?php

declare(strict_types=1);

/*
1. Parašykite funkciją, kuri spausdintų šią struktūrą. Funkcijai turi būti paduodama skaičius, kuris nurodys
kiek lygių turi būti spausdinama. Pavyzdžio atveju, tas skaičius yra 5.
    1
   222
  33333
 4444444
555555555
*/

function pyramid(int $number)
{
    $result = '';
    //ilgiausia figūros eilutė
    $maxLength = ($number * 2) - 1;
    
    for($i = 1; $i <= $number; $i++)
    {
        //einamo skaičiaus užimama eilutės dalis
        $currentLength = ($i * 2) - 1;

        //po kiek iš šonų gaunas brūkšnelių
        $side = ($maxLength - $currentLength) / 2;

        for($n = 1; $n <= $maxLength; $n++){

            //dedam brūkšnius iš šonų apeinant vidurį, kur skaičiai turi būti
            if($n <= $side || $n > ($side+$currentLength)){
                $result .= "-"; 
            }else{
            //čia vidurys, skaičiai.
                $result .= $i;
            }
        }

        $result .= "\n";
    }

    return $result;
}
echo pyramid(7);
/*
2. Parašykite funkciją, kuri leistų vartotojui spėti, kokį random skaičių sugeneravo scriptas. Atspėjus, outputas turi
informuoti, kiek spėjimų buvo padaryta.
Input'ui iš vartotojo gauti naudokite funkciją 'readline' - https://www.php.net/manual/en/function.readline.php
Atsitiktiniam skaičiui generuoti naudokite funkciją 'rand' - https://www.php.net/manual/en/function.rand.php
Kvietimo pavyzdys:

php exercises.php
Įveskite galimų skaičių intervalo galą: 10
Spėkite skaičių: 5
Aukščiau!
Spėkite skaičių: 9
Žemiau!
Spėkite skaičių: 8
Teisingai! Panaudota spėjimų - 2
*/

function guesser()
{
    $tekstas = null;
    $random = rand(1,10);
    $guess = 0;
  
    while($tekstas != $random){
        
        $tekstas = readline('Įveskite skaičių:');
        if(is_numeric($tekstas)){
            $guess++;
            if($tekstas < $random){
                echo "Aukščiau\n";
            }elseif($tekstas > $random){
                echo "Žemiau\n";
            }
        }else{
            echo "Įvedėte ne skaičių!!!!\n";
        }
    }

    echo "Teisingai! Panaudota spėjimų - $guess";
}

/*

*
**
***
****
*****
******
*******
******
*****
****
***
**
*

*/
function exercise6(int $number): void {
	
	$double = $number * 2;

    for($i = 0; $i <= $double; $i++)
    {
        echo "\n";
        $start = $num = 0;
        
        if($i<=$number){
        	$num = $i;
        }elseif($i>$number){
        	$start = ($i - $number*2);
        }
 
        for($j = $start; $j < $num; $j++){
            echo "*";
        }
        
    }
}

// echo exercise6(4);