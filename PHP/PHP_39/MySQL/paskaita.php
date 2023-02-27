<?php

// Many-to-many sąryšis - tai būdas vienos lentelės įrašus (eilutes) susieti su daugeliu įrašų (eilučių)
// iš kitos lentelės, o pastarosios bet kurį įrašą susieti (eilutę) su daugeliu pirmosios lentelės įrašų (eilučių).
// Tai yra abipusis, simetriškas ryšys. 

// Jei turim 2 lenteles - `games` ir `platforms`, bet kuris žaidimas gali turėti neapibrėžtą kiekį platformų - nuo 1 iki 
// tiek, kiek yra platformų lentelėje. Tuo pačiu, bet kuri platforma gali būti priskirta prie neapibrėžto kiekio žaidimų. 
// Šiam ryšiui įgyvendinti nereikia papildomų stulpelių DUOMENŲ lentelėse. 
// Kaip pavyzdys - žaidimas 'Half-Life' turi platformas - pc, ps2, linux, mac, o kiekviena iš tų platformų gali būti priskirta ir prie 
// kitų žaidimų. 

// Kitaip nei one-to-many ryšys, kada vienoje duomenų lentelėje, mūsų atveju `games`, reikia platform_id, many-to-many ryšiui įgyvendinti nereikia papildomų
// stulpelių pačiose duomenų lentelėse.

// Šiam ryšiui reikia papildomos, tarpinės lentelės, kartais vadinamos relationship arba pivot lentele. 
// Tokios lentelės pavadinimas sudaromas iš dviejų jungiamųjų lentelių pavadinimų, vienaskaita ir abecėlės tvarka, taigi pagal pavyzdį - game_platform. 

// Game_platform paskirtis - sugauti ryšius tarp games ir platforms įrašų. 
// Joje bus 2 stulpeliai - plaform_id ir game_id. Kiti stulpeliai nėra būtini, bet galima pridėti, jei yra poreikis. 

// game_platform lentelės stulpeliai, kurie yra svetimi raktai, turi būti susaistomi svetimų raktų saitais - foreign keys. 
// platform_id su platforms, game_id su games lentelėmis. 

// game_platform lentelės įrašų poros turi būti unikalios ir taip pat susaistytos unique index saitais. 
// CONSTRAINT uc_person UNIQUE (id, person)

// UNIQUE indexas reiškia, kad pildant game_platform bus galima suskurti poras tarp įrašų, kartojant to paties žaidimo arba tos pačios platformos id, bet ne abu. 
// Identiški įrašai negalės būti įvedami. 

// game_platform lentelės įrašas nėra įprastai atnaujinami. Jei games įrašas turi platformą




//Rašant SELECT užklausą bus apjungiamos į vieną 3 lentelės. 

// Rašant SELECT query many-to-many lentelėms naudojami 2 joinai arba subselect. 
// Reultatus dažnai reikia GRUPUOTI pagal pasikartojančius stulpelius, kaip ir ar title. 

// Norint 1 rezultato eilutes 1 stulpelyje matyti daugiau verčių, pvz. daug platformų, 
// kartu su GROUP BY reikia naudoti agregavimo funkciją, pvz JSON_ARRAYAGG(), GROUP_CONCAT, SUM() ir panašiai. 

