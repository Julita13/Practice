<?php

// MVC dizaino šablonas

// MVC - (Model-View-Controller) - tai architektūrinis dizaino šablonas (architectural design patte

// Atsakingas už pagrindinę (biznio) aplikacijos logiką.
// -- Ryšio su duomenų baze užmezgimas
// -- Duomenų gavimas, keitimas, valdymas etc (DB operacijos)
// -- Gautų duomenų manipuliacija
// -- Kitų programinių paslaugų (servisų) naudojimas
// -- Kita

// Controller
// Tai tarpinininkas tarp modelio ir view'so. 
// -- Valdo įeigos taškus (entry point). Kiekvienas metodas turi atitikti konkrečią užklausą 
// iš kliento - show, update, delete ir t.t. 
// -- Priima užklausas iš view'so ir perduoda jas modeliui
// -- Gauna atsakymą iš modelio ir atiduoda view'sui. 

// Controller'io apribojimai: 
// -- neturi apibrėžti metodų, nesusijusių su aplikacijos įeigos taškais.
// -- neturi turėti kodo, aprašančio biznio logiką, bet gali inicijuoti metodus iš kitų servisų, pvz.: 
// gali validuoti duomenis, bet negali aprašyti validatoriaus pats. 
// -- prilyginamas operatoriui - gavęs prašymą, jis perduoda atsakingiems "darbuotojams". 
// Operatorius gali nuspręsti ar užklausa teisinga ar perduoti toliau, ar klausti patikslinimo 
// ar atmesti užklausą, bet pačios užklausos operacijos nedaro. 

// View
// Tai aplikacijos atvaizdavimas
// -- frontend'o dalis - html, css ir jss
// -- gali būti sudarytas iš vieno failo arba daugelio šablonų
// -- gali turėti logikos, tokios kaip ciklai, sąlygos ir t.t. 

// MVC pranašumai:
// -- Tvarka projektuose; 
// -- Augimo galimybės;
// -- Greitesnis vystymas;
// -- Lengvas papildymas;
// -- Kodo pernaudojimas;
// -- Optimalesnis darbas komandai

// MVC minusai:
// -- Sunku perprasti struktūrą;
// -- Reikia vadovautis griežta tvarka.


// Composer init
// composer dump-autoload
// composer install 
// persivadini composer.json faile pradinį atspirties tašką (5 eilutė) 
// šito projekto atveju "App\\": "app/"
?>