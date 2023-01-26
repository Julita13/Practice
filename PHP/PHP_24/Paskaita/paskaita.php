<?php 
//Statika, konstantos, abstrakčios klasės, magiški metodai

// Klasės konstantos vaidina tą patį vaidmenį kaip ir įprastos konstantos (aprašomos pasitelkiant keyword'ą define). 
//Skirtumas tas, kad klasės konstantos yra susiejamos su klase. Jos aprašomos kaip ir kintamieji - nurodomas pavadinimas. Tipo nurodyti nereikia. 
//Papildomai reikia nurodyti, kad tai - konstanta - tam naudojamas keyword'as const. Pvz: public const MINUTES_IN_HOUR = 60.

//Po kontantos deklaravimo jos reikšmė negali būti keičiama. Norint ją pasiekti klasės viduje, naudojame keyword'ą self. 
//Klasės išorėje - klasės pavadinimą. Prie konstantos pavadinimko nereikia nurodyti $. Klasės išorėje galime pasiekti tik public matomumo konstantas. 

//Konstantų pavadinimus įprasta rašyti didžiosiomis raidėmis, o žodžius atskirti "_". Matomumas - kaip įprastų kintamųjų: private, protected, public. 

echo "One hour has" . TimeCalculator::MINUTES_IN_HOUR . "minutes";

// rba klasės viduje: reikia rašyti ne $this, o self:

// public function convertToMinutes(int $hours):int {
//     return $hours * self::MINUTES_IN_HOUR;
// }

//STATIC

//Metodai ar savybės, kurie deklaruojami statiškai, gali būti pasiekiami neinicializuojant objekto. "Deklaruoti statiškai" - pridėti 
//keyword'ą "static" prie metodo ar savybės aprašymo. Norint pasiekti statinę savybę ar metodą klasės viduje, naudojame keyword'ą "self" bei scope resolution operatorių ::, PVZ: 
//self::$someStaticProperty;
//Nporint pasiekti statinę savybę ar metodą už klasės ribų - naudojame klasės pavadinimą. Pvz: 
//CAR::$type; 
//CAR: isTypeValid();

//Statiniuose metoduose negalime naudoti pseudokintamojo $this. $this yra pasiekiamas tik objekto kontekste. Kita vertus, statines savybes arba metodus 
//naudoti įprastuose (ne statiniuose) klasės metoduose galime. 
//Statinės savybės yra naudojamos retai, tačiau statiniai metodai yra sutinkami dažniau. Statinio metodo panaudojimas galėtų būti: 
//grąžinti sugrupuotas klasės konstantas. arba 
//nedusėtinga validacija ar konvertavimas. 

// Abstrakti klasė
//Tai klasė pritaikyta paveldėjimui. Ją paveldinčios klasės privalo implementuoti (aprašyti) abstrakčius metodus. 
//Skiriamasis bruožas - keyword'as abstract prieš klasės pavadinimą. Be to, dažniausiai tokia klasė turi bent vieną 
//abstraktų metodą, pvz. abstract public function someFunction()

//Abstrakti klasė negali būti inicializuota - pirmiausia turi būti aprašyta vaikinė klasė, kuri paveldėtų abstrakčiąją klasę ir implementuotų (užpildytų logika) abstrakčius metodus. Vaikinė klasė gali būti inicializuota. 

//Abstraktaus metodo implementacija signature turi atitikti abstraktų metodą - t.y. matomumas, parametrų tipai, return tipai turi sutapti/ 