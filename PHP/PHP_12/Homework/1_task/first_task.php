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


?>