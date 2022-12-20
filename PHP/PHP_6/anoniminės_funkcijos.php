<?php 

//An. fn yra išraiška, todėl reikia kabliataškio gale. Išraiška - tai bet koks kodas, kuris grąžina vertę ir gali būti priskirtas kintamajam.
// Kitaip nei paprastos funkcijos, anoniminės funkcijos apibrėžimas grąžina vertę. "Closure" klasės objektą ir gali būti priskiriamas kintamajam. 

// var_dump(function () {});
// $anonymousFunction = function(){
    
// };

// var_dump($anonymousFunction);
// var_dump($anonymousFunction());

//An. fn sukuriamos objekto pagalba, t.y. aprašant tokią funkciją, iš tikro kuriamas "Closure" klasės objektas. Todėl galima saugoti kintamajame ir perduoti 
//į kitas funkcijas. Funkcijos, kurias galima perduoti kaip kintamuosius, vadinamos pirmos klasės ("First class");

//priskiriamos kintamiesiems ir kviečiamos vėliau. 
$anonymousFunction = function (): string {
    return "Init from variable";
};
//iškviečiama anoniminė funkcija

echo $anonymousFunction();
echo "\n\n";

//Iškviečiama iškart užsikrovus dokumentą. 

echo (function () {
    return "Init on load";
})();

//Tas pats, kas:

// $fn = function () {
//     return "Init on load";
// };


//An. fn gali būti perduodama į kitų funkcijų parametrus arba grąžinamos kaip funkcijos rezultatas. 
echo "\n\n"; 
function someFn(Closure $lambda) { // vietoj Closure galima rašyti callable
    return $lambda();
}

echo someFn(function () {
    return "This is a anonymous function call";
});


$firstName = "Mykolas";
$secondName = "Norkus";

$getName = function () use ($firstName, $secondName) {
    return "$firstName, $secondName";
};

function isUseClosureAsArgument(Closure $closure){
    return $closure();
}

var_dump($getName);die();
// echo isUseClosureAsArgument($getName);

?>