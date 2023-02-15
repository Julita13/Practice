<?php

//Duomenų bazės - DB - tai struktūrizuotų duomenš rinkinys, dažniausiai saugomas elektroniškai. 
//DB struktūra priklauso nuo duomenų struktūrizavimo modelio, pagal kurį sudaryta DB, pvz.: reliacinis, hierarchinis, objektinis ar kitoks duomenų modelis.
//Populiariausias DB modelis šiandieną yra Reliacinis - sąryšinis. 

//RDB - reliacinė duomenų bazė - tai DB, kurios duomenys vartotojui perduodami lentelės formatu. 
//Sudaryta iš horizantalių eilučių(row/record/tuple) ir vertikalių stulpelių (column/attribute/field). 
//Terminas "Reliacija" arba "Sąryšis" yra "Lentelės" sinonimas, kuriuo nusakomas sąryšis tarp jos eilučių ir stulpelių. 
//DB gali sudaryti daugybė lentelių. 

//Lentelės pavadinimas turi būti unikalus visuoje duomenų bazėje. 
//Lentelėje esančių stulpelių pavadinimai negali kartotis.
//Lentelėje negali būti identiškų įrašų, t.y. eilučių. 

//Stulpelis (column/attribute) - tai savybės, kurias turi kiekvienas Lentelės įrašas, pvz.: first_name, last_name, phone ir t.t. 
//Kiekvienas stulpelis yr sudarytas iš pavadinimo (name) ir domeno/duomenų tipo (domain/data type). 
//VARCHAR - stringas!
//Eilutė - row, tuple, record - tai vienas įrašas lentelėje. Pvz.: vienas vartotojas būtų viena eilutė lentelėje.  
//Kiekviena eilutės ir stulpelio sankirta vadinama duomenų elementu, reikšme arba verte. 
//Galima sakyti, kad eilutė - tai duomenų elementų rinkinys/aibė, kurioje nė vienas elementas neturi to paties pavadinimo. 

//Lentelės pavadinimas turi būti unikalus visoje duomenų bazėje. 
// Lentelėje esančių stulpelių pavadinimai negali kartotis. 
// Lengelėje negali būti identiškų įrašų. 
//
//Kiekvienas duomenų elementas/reikšmė/value eilutėje gali turėti tik vieną vertę. 
// Pvz.: į name įrašius "Vardenis Pavardenis" bus traktuojama kaip viena vertė ir nebus suprantama, kaip atskirai Vardas ir Pavardė. 
//Visi Lentelės duomenų elementai gali priklausyti tik vienam duomenų tipui. 


//Duomenų tipai/domenai.

//DATE - saugoma data formatu YYYY-MM-DD
//VARCHAR - variable character, įvariųs simboliai, kitaip - string tipo duomenys. Nurodomas maksimalus ilgis (50), bet saugoma tik tiek, 
//kiek įvedama. Vienas simbolis užims 1 baitą plius 1 baitą kintančiam ilgiui saugoti. 
//INT - integer, sveikieji skaičiai. 

//RDBVS - reliacinės duomenų bazių valdymo sistemos
//RDBVS - tai programa, kuri leidžia vartotojui sukurti ir tvarkyti reliacinę duomenų bazę. 
//Populiarios RDBVS yra MySQL, PostgreSQL, SQLite, Oracle, MSSQL, MariaDB.
//RDBVS naudoja SQL kalbą ("Structured Query Language") ar SQL kalbos variacijas duomenų bazėje esantiems duomenims valdyti. 

//Duomenų apibrėžimo kalba (DDL)
//DDL kuriamos lentelės.
//Kuriant lentelę, būtina nurodyti vardą, jos stulpelių pavadinimus ir domenus (duomenų tipus).
//Duomenų tipai gali turėti atributus kaip: int(5) - atvaizdavimo ilgį, char(10) - fiksuotas string ilgį, varchar - maximalų string ilgį. 
//Lentelės stulpeliai taip pat turi papildomų pasirinktinų parametrų . 

//CREATE TABLE
//ID yr pirminis raktas ir auto increment - automatiškai didėjantis skaičius, užtikrinsiantis kiekvieno įrašo unikalumą. 
//first_name ir last_name yra varchar duomenų tipo, maksimalaus galimo ilgio - 50 simbolių. 
//Date_of_birth yra datos tipo, tad priims YYYY-MM-DD formato data. 
//NOT NULL reiškia, jog nei viena reikšmė negalės būti NULL, visos turės būti užpildytos, kad įrašas/eilutė būtų sukurtas. 

//INSERT
//INSERT INTO sakinys sukurs naują eilutę/įrašą lentelėje. 
//Įrašomų verčių tvarka turi atitikti aprašytų stulpelių pavadinimų tvarką ir skaičių. 

//UPDATE 
//pakeis nurodytų įrašo stulpelių reikšmes naujomis reikšmėmis. 
//Šiam sakiniui dažniausiai reikia pridėti WHERE sąlygą (predikatą), kad atnaujintų tik tą/tuos įrašus, kurie atitinka nurodytą sąlygą. 
//Kitu atveju bus atnaujinami visi įrašai. 

//SELECT
//išrenka duomenis iš nurodytos lentelės. Šiuo sakiniu nurodoma, kokių stulpelių reikšmių norima ir iš kokios lentelės bus renkama. 
//Galima pridėti WHERE sąlygą, kad būtų gražinami tik tie įrašai, kurie atitinka nurodytą sąlygą. Kitu atveju bus gražinami visi įrašai. 
//Jei norima, kad būtų gražinami visi stulpeliai, tuomet vietoj konkrečių stulpelių pavadinimų galima naudoti specialų simbolį * SELECT * FROM table. 

//DELETE
//-ištrina įrašus iš nurodytos lentelės. 
//Šiuo sakiniu nurodoma, kokius įrašus ištrinti. 
//Būtina naudoti sąlygą WHERE ir  nurodyti, kuriuos įrašus reikia ištrinti, kitu atveju bus ištrinti visi įrašai. 


// HEIDI: 


// CREATE DATABASE `julita`;
// DROP DATABASE `julita`;

// CREATE TABLE `users` (
// 	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
// 	first_name VARCHAR(50) NOT NULL,
// 	last_name VARCHAR(50) NOT NULL, 
// 	date_of_birth DATE
// );


// INSERT INTO `julita`.`users`(`first_name`,`last_name`,`date_of_birth`)
// VALUES('Julita','Mažuolytė-Mečkovska','1989-05-13');