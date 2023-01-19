<?php

//Klasė - yr tarsi brėžinys, planas, pagal kurį yra kuriami objektai. Klasėje aprašoma: 
// a) kokie duomenys bus saugomi objekte 
// b) veiksmai, kurie bus galimi su tais duomenimis.

//Klasei aprašyti naudojamas keyword'as class. Po jo eina klasės pavadinimas ir, galiausiai, riestiniai skliaustai. 
//Klasės pavadinimas pradedamas didžiąja raide. Jeigu pavadinimą sudaro keletas žodžių, visi jie pradedami didžiąja raide. 

//Objektai kuriami (inicializuojami) panaudojant keyword new. Po šio žodžio seka klasės pavadinimas ir skliaustai, 
//Kodo pavyzdyje kintamajam $animal yra priskirtas iš klasės Animal sukurtas objektas.

class Animal {}
$animal = new Animal();
var_dump($animal);

//vardampinasi toks dalykas: object(Animal)#1 (0) {
// Klasė yra šablonas, o objektas yra tai, kas sukuriama iš klasės panaudojant keyword'ą new. 
// Kasdieniame gyvenime tai atitiktų namo projektą (klasė) ir pagal tą projektą pastatytus namus (objektai). 
// Iš vieno projekto galime statyti neribotą kiekį namų. 

//Iš vienos klasės galima sukurti neribotą kiekį objektų. Papildomų objektų sukūrimas niekaip nepaveiks pačios klasės ar jau egzistuojančių tos klasės objektų. 
// Plius, tai nėra daug kompiuterio resursų reikalaujantis veiksmas. Nebijokime aprašinėti naujų klasių!

// Klasės savybes (properties, fields, member variables) galime įsivaizduoti kaip kintamuosius, kurie talpins tam tikras reikšmes. 
//Klasės savybė aprašoma šia tvarka: 

//1. Matomumas (visibility). Gali būti private, public, protected. Kolkas koncentruosimės į PUBLIC.
//2. Tipas. Mumas jau žinomi PHP tipai: string, int, array, bool, ir t.t.
//3. Pavadinimas (name). Pavadinimas turi būti unikalus toje klasėje, t.y. savybių pavadinimai negali sutapti. Pavadinimas aprašomas taip pat kaip ir įprasto kintamojo pavadinimas. Galioja tos pačios taisyklės.
//4. Numatytoji reikšmė (nebūtina). Panašiai kaip ir su funkcijomis. Numatytoji reikšmė gali būti string, array, int ar kita reikšmė. 

//Klasės metodai
// - tai klasės elgesys (funkcija). 
//Jiems naudojamas arrow operatorius -> (nepainioti su  =>, kuris naudojamas masyvuose).

//$this - tai pseudokintamasis, kurį galime naudoti, kuomet metodas yra kviečiamas objekto kontekste. $this reikšmė yra pats objektas. 
//Tai reiškia, kad nėra skirtumo tarp to, ką grąžina metodas getThis() ir paties objekto - abu jie yra tas pats objektas. 

//Kadangi $this reikšmė yra pats objektas, tad mes galime naudoti šį pseudokintamąjį valdyti objekto savybes. Kaip ir metodų atveju, 
//savybes galime pasiekti su arrow operatoriumi, kombinuodami jį su $this pvz.: $this->type. Skirtumas tas, kad, šiuo atveju, nenaudojame skliaustų. 