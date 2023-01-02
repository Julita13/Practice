<?php
/*
1. Parašykite funkciją, kuri spausdintų šią struktūrą. Funkcijai turi būti paduodama skaičius, kuris nurodys
kiek lygių turi būti spausdinama. Pavyzdžio atveju, tas skaičius yra 5.
    1
   222
  33333
 4444444
555555555
*/
	function createChristmasTree(int $myNumber):void {
    for ($i = 1; $i <= $myNumber; $i++){
        for ($j = 1; $j < $myNumber + $i; $j++) {
            if ($j >= $myNumber - $i + 1) {
                echo $i;
            } else {
                echo " ";
            }
        }
        echo "\n";
    }
};

// createChristmasTree(4);

//Jevgenijaus solution'as:
function exercise6($number): void {
        $double = $number * 2;
        for($i = 0; $i <= $double; $i++){
            echo "\n";
            $start = $num = 0;
            if($i<$number){
                $j = $start;
                $num = $i;
            }elseif($i>=$number){
                $j = $i-$double;
            }
            for($j ;$j <= $num; $j++){
                echo "*";
            }
            }
        }
    
    // echo exercise6(4);

/*
3. Parašykite funkciją, kuri leistų vartotojui spėti, kokį random skaičių sugeneravo scriptas. Atspėjus, outputas turi
informuoti, kiek spėjimų buvo padaryta.
Input'ui iš vartotojo gauti naudokite funkciją 'readline' - https://www.php.net/manual/en/function.readline.php
Atsitiktiniam skaičiui generuoti naudokite funkciją 'rand' - https://www.php.net/manual/en/function.rand.php
Kvietimo pavyzdys:

php -f exercises.php
Įveskite galimų skaičių intervalo galą: 10
Spėkite skaičių: 5
Aukščiau!
Spėkite skaičių: 9
Žemiau!
Spėkite skaičių: 8
Teisingai! Panaudota spėjimų - 2
*/

function randomNumbers(){
    $tekstas = null;
    $random = rand(1, 10);
    $guess = 0;
    echo "$random\n";
 
    while ($tekstas != $random){
        $tekstas = readline('Iveskite skaičių:');
        if(is_numeric($tekstas)){ 
            $guess ++;
            if($tekstas < $random){
                echo "\nAukščiau!\n";
            }
            elseif($tekstas > $random){
                echo "\nŽemiau!\n";
            }
        } 
        else {
            echo "Tai turi būti SKAIČIUS!\n";
        }
        }
    echo "Valio! Panaudota spėjimų: $guess\n\n";
};
 
echo randomNumbers();

?>