<?php

// PDO 

// Tai PHP Data Objects - tai PHP sąsaja prieigai prie įvairių duomenų bazių - tarp jų ir MySQL. 
// Norėdami naudoti PDO MySQL prieiga, turime įsitikinti, kad yra suinstaliuoti PDO ir pdo_mysql plėtiniai. 
// Tai galima patikrinti terminale. 

// Norėdami atlikti DB užklausą, turime įvykdyti šiuos žingsnius: 
// 1. Sukurti PDO objektą, jam paduodant prisijungimo informaciją bei parametrus: Host, Port, DB pavadinimas, Username, Password, Papildomi parametrai. 
// 2. PDO objektui paduoti užklausos kodą
// 3. Įvykdyti užklausą

// Iš PHP aplikacijos į MySQL serverį siunčiamos užklausos retai yra statinės. Dažniausiai jos yra sukonstruojamos panaudojant 
// iš front-end'o ateinančius duomenis. 
// Tų parametrų reikšmių mes nekonstroliuojame (jas nustato vartotojai), tad užklausų konstravimas dedant front-end'o duomenis 
// tiesiai į u-klausos string'ą, gali sukelti didelių problemų. 


