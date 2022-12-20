<?php
declare(strict_types = 1);

// Visur sudėkite reikiamus parametrų bei return tipus

/*
1. Parašykite funkciją 'dividesBy5', kuri priimtų int tipo skaičių ir grąžintų jo dalybos iš 5 liekaną.
*/


// function dividesBy5(int $myNumber):int {
//     return $myNumber%5;
// }

// echo dividesBy5((11));
// echo "\n\n";

/*
2. Parašykite funkciją 'arrayPrinter', kuri priimtų array tipo parametrą ir
išspausdintų kiekvieną masyvo elementą naujoje eilutėje.
Funkcijos kvietimas: arrayPrinter(['some text', 'another text'])
Funkcija grąžina: funkcija nieko negrąžina - ji tik išspausdina masyvą į terminalą:
'some text'
'another text'
...
*/

// function arrayPrinter(array $myArray):void {
//     foreach($myArray as $arrayItem) {
//         echo "'$arrayItem' \n";
//     };
// };

// arrayPrinter(['some text', 'another text']);
// echo "\n\n";

/*
3. Parašykite funkciją 'stringEnhancer', kuri grąžintų pakeistą tekstą.
Funkcijos kvietimas: stringEnhancer('some text', '##')
Funkcija grąžina: '##some text##'
Funkcijos kvietimas: stringEnhancer('some text')
Funkcija grąžina: '**some text**'
*/

// function stringEnhancer(string $myString, string $secondString='**'):string {
//     return $secondString.$myString.$secondString;
// }
// ;

// echo stringEnhancer('some text', '##');
// echo "\n";
// echo stringEnhancer('some text');
// echo "\n\n";

/*
4. Parašykite funkciją 'stringModifier', kuri pamodifikuotų paduotą string tipo kintamąjį.
Funkcijos kvietimas:
$x = 'some text';
stringModifier($x, '##');
echo $x; // '##some text##'
Funkcija grąžina: funkcija nieko negrąžina
*/

//VEIKIANTIS ATSAKYMAS: 
// function stringModifier(string &$newString, string $specialCaracter) {
//     $newString = $specialCaracter . $newString . $specialCaracter;
// }

// $x = "some text";
// stringModifier($x, "##");
// echo $x; // "##some text##" 
// echo "\n\n";

/*
5. Parašykite funkciją 'textReplicator', kuri grąžintų 'padaugintą' tekstą.
Funkcijos kvietimas:
textReplicator('some_text', 3);
Funkcija grąžina: 'some_text-some_text-some_text'
Funkcijos kvietimas:
textReplicator('some_text', null);
Funkcija grąžina: 'some_text'
*/

function textReplicator(string $myText, $replicator): void {
    if (is_int($replicator) == false) {
        echo $myText;
    } else {
        echo str_repeat("$myText-", $replicator);
    }
}
;

textReplicator("some_text", 5);
echo "\n";
textReplicator('some_text', null);
echo "\n\n";

/*
6. Paverskite funkciją 'textReplicator', į veikiančią anoniminę funkciją.
*/

/*
7. Parašykite funkciją, kuri spausdintų šią struktūrą. Funkcijai turi būti paduodama skaičius, kuris nurodys
kiek lygių turi būti spausdinama. Pavyzdžio atveju, tas skaičius yra 5.
    1
   222
  33333
 4444444
555555555
*/

/*
8. Parašykite funkciją, kuri leistų vartotojui spėti, kokį random skaičių sugeneravo scriptas. Atspėjus, outputas turi
informuoti, kiek spėjimų buvo padaryta.
Input'ui iš vartotojo gauti naudokite funkciją 'readline' - https://www.php.net/manual/en/function.readline.php
Atsitiktiniam skaičiui generuoti naudokite funkciją 'rand' - https://www.php.net/manual/en/function.rand.php
Kvietimo pavyzdys:
php -f exercises.php
Įveskite galimų skaičių intervalo galq: 10
Spėkite skaičių: 5
Aukščiau!
Spėkite skaičių: 9
Žemiau!
Spėkite skaičių: 8
Teisingai! Panaudota spėjimų - 2
*/

// $a = 10;
// $b = $a;

// $b = $b - 1;

// echo $a;
// echo "\n";
// echo $b;
// die();

// ANDRIAUS SPRENDIMAI: 
// https://www.mycompiler.io/view/DTnb4nKZxCD
?>