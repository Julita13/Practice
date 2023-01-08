
<?php 

/*
    2. Pratimas POWER
    Sukurkite funkciją, kuri pakelia skaičių bet kokiu laipsniu.
    Funkcija priima skaičių ir laipsnį, kuriuo reikia pakelti
    Panaudokite ciklą.

*/

function exercise2(int $number, int $power): int {
    $finalNumber = pow($number, $power);
    return $finalNumber;
};

echo "2 pratimas \n"; 
echo(exercise2(3, 2));
echo "\n\n";

//2 sprendimo būdas, kad jau būtinai reikėjo panaudoti ciklą, ką pastebėjau tik vėliau ;)

function exercise22(int $number, int $power): int {
    $finalNumber = 1;
    for ($i = $power; $i > 0; $i--) {
        $finalNumber *= $number;
    }
    return $finalNumber;
};

echo "2 pratimas - sprendimas su ciklu \n\n"; 
echo(exercise22(3, 5));
echo "\n\n";

?>