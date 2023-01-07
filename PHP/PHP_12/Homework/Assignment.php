<?php 

/*
    1.Pratimas ARRAY
    Sunaikinkitę visus elementus, kurių reikšmė yra 'error' ir grąžinkite pamodifikuotą masyvą.
    Tikėkitės, kad $products masyvo narių skaičius gali varijuoti, tad naudokite ciklą.
*/
function exercise1(): array {
    $products = [
        'item_1' => 'desk',
        'item_2' => 'lamp',
        'item_3' => 'error',
        'item_4' => 'sofa',
        'item_5' => 'error',
    ];

    foreach($products as $key => $value) {
        if($value === "error"){
            unset($products[$key]);
        } 
    } return $products;
};

echo "1 pratimas \n"; 
print_r(exercise1());
echo "\n\n";

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

//2 sprendimo būdas, kad jau būtinai reikėjo panaudoti ciklą, ką pastebėjau vėliau ;)

function exercise22(int $number, int $power): int {
    $finalNumber = 1;
    for ($i = $power; $i > 0; $i--) {
        $finalNumber *= $number;
    }
    return $finalNumber;
};

echo "2 pratimas - sprendimas su ciklu \n"; 
echo(exercise22(3, 5));
echo "\n\n";

/*
    4. Pratimas RANDOM USER
    Sukurti 2 php failus  lucky_user.php, randomizer.php.
    lucky_user.php turi linką pavadinimu "Pick User", kuris veda į kitą failą randomizer.php.
    randomizer.php turi funkciją, kuri yra iškviečiama iškarto.
    Funkcijoje yra useriu masyvas, sudarytas iš vardų:
        [
        'Virgis',
        'Algis',
        'Laura',
        'Matas',
        'Toma',
        'Rasa',
        'Liudas',
        'Edmis'
    ]
    Funkcija atsitiktiniu būtų ištraukia iš masyvo vardą ir jį grąžina.
    Funkcija inicijuojama ir jos rezultatas priskiriamas kintamajam $result, ir perduodamas į header() funkciją,
    kuri automatiškai grąžina į lucky_user.php, su parametru name.
    PVZ.: header("Location: lucky_user.php?name=$result");
    lucky_user.php faile yra php kodas, kuris analizuoja ar urle yra parametras name, jei yra -
    atvaizduoja jo išrinktą vardą.
/*


?>
