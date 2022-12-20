<?php
//Anonimine funkcija arba dar vadinama - Lambda, tai funkcija, kuri neturi pavadinimo.
function () {
};
/*
An.fn. yra išraiška, todėl reikia kabletaškio gale.
Išraiška - tai bet koks kodas, kuris grąžina vertę ir gali būti priskirtas kintamajam.
Kitaip nei paprastos funkcijos, anoniminės funkcijos apibrėžimas grąžina vertę - 
"Closure" klasės objektą ir gali būti priskiriamas kintamajam.
*/
var_dump(function () {
});

$anonymousFunction = function () {
};

var_dump($anonymousFunction);
var_dump($anonymousFunction());

/*
An.fn. sukuriamos objekto pagalba, ty. aprašant tokią funkciją, iš tikro kuriamas "Closure" 
klasės objektas. Todėl galima saugoti kintamajame ir perduoti į kitas funkcijas.
Funkcijos, kurias galima perduoti kaip kintamuosius, vadinamos pirmos klasės ("First class");
*/
echo "\n\n";
//Priskiriamos kintamiesiems ir kviečiamos vėliau
$anonymousFunction = function (): string {
    return "Init from variable";
};
//Iškviečiama anoniminė fn.
echo $anonymousFunction();
echo "\n\n";
//Iškviečiama iškart užkrovus dokumentą
echo ($function = function () {
    return "Init on load";
})();
/*
Tas pats kas:
$fn = function(){
    return "Init on load";
};
echo $fn();
 */
echo "\n\n";
//Ir dar kartą
echo $function();
//Ir dar kartą
echo $function();

//An.fn. gali būti perduodamos į kitų funkcijų parametrus arba grąžinamos kaip funkcijos rezultatas.
echo "\n\n";
function someFn(Closure $lambda)
{
    return $lambda();
}

echo someFn(function () {
    return 'This is a anonymous function call';
});
//Callback - funkcija perduota kaip kitos funkcijos parametras.

//CLOSURE
/*
Tai anoniminė funkcija, kurios naudojamus kintamuosius/vertes
apibrėžia išorinis kontekstas (outer context/scope).

Galima sakyti, tai lambda, kurios naudojami kintamieji egzistuoja
ne uždarame kontekste, t.y. pati funkcija neturi visu reikiamu verčių savo viduje. 
*/

// function () {
//     return $firstName;
// };
/*
Jos kintamieji yra atviri, reikalaujantys pririšimo kažkokiai vertei.
Tam panaudojami išoriniame kontekste esantys kintamieji, kurie pririša/uždaro(closes)
tokios funkcijos atvirus kintamuosius.
Iš to ir pavadinimas Closure
*/
$firstName = 'Mykolas';
$lastName = 'Norkus';

$getName = function () use ($firstName, $lastName) {
    return "$firstName $lastName";
};

//Tokia funkcija išlaiko išorinio konteksto kintamojo vertę, kurią gavo savo apibrėžimo metu.
//Todėl perdavinėjant ją toliau, ta vertė keliauja kartu su anonimine funkcija.

// echo $getName();

function isUseClosureAsArgument(Closure $closure)
{
    return $closure();
}

var_dump($getName);
echo isUseClosureAsArgument($getName);

// Toliau pavyzdys, kai funkcija grąžina closure'a.
// Pirma apibrėžiama savaime pasileidžiančią funkcija Driver.
// Ji pasileis iškart ir apibrėš savo kontekste esančius kintamuosius $name ir $car
// Driver kaip rezultatą grąžina closure - anoniminę funkciją,, kuri naudoja 
// tėviniam konteste esančius kintamuosius $name ir $car.
// Tokiu būdu apibrėžiamas išorinis kontestas, kuris nėra globalus ir funkcija, kuri naudoja
// tą išorinį kontekstą, kintamiesiems gauti.

$driver = (function(): Closure//-return type turi būti Closure tipo objektas
{
    //yra driver funkcijos localus kontekstas us savo kintamaisiais ir 
    //closure funkcija. 
    $name = 'James';
    $car = 'Aston Martin';

    $closure = function () use($name,$car) {
        return "$name drivers $car";
    };

    return $closure;
})();

function test(Closure $closure): void
{
    echo $closure();
}

test($driver);


//Arrow Function
//Sutrumpinta Anoniminė funkcija/closure, kuri autimatiškai pririša (use) kintamuosius iš išorinio konteksto;

$x = 2;
$y = 10;

$arrow = fn () => $x * $y + 15;
/*Atitinka 
    $arrow = function () use ($x, $y) {
        return $x * $y + 15;
    };
*/

var_dump($arrow);