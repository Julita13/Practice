<?php 

//1. Suformuoti projekto struktūrą su direktorijom    
//public    
//src    
//autoload

//2. Direktorijoje public sukurti index.php failą.
//3. index.php yra pradinis(home) puslapis. Jam reikės atitinkamos klasės Home, kuri bus faile Home.php src direktorijoje.src/home.php
//Sukurit klasę Home ir vieną public metodą index(). 
//4. Instancijuoti Home klasę index.php faile ir paleisti jos metodą ->index(). 
//Paleidus šį metodą bus atvaizduotas html puslapis. Patikrinam, ar veikia index metodas.
//5. Klausimas - kur turi būti html dalis?
//6. Sukurti templates direktoriją.
//7. Templates direktorijoje sukurti templates/home.php
//8. templates/home.php - aprašykite pradinio puslapio html struktūrą.


//NEXT STEPS: 

//1. Sukurti naują failą public/Games/index.php.    
//2. Sukurti naują failą src/Game.php    
//3. src/Game.php parašyti klasę Game su public metodu index.php    
//4. public/Games/index.php faile instancijuoti klasę Game ir paleisti metodą index    
//5. Patikrinti, ar index metodas pasileidžia ir nėra klaidų.

// II Dalis. Json duomenų paėmimas    
// 1. Sukurti failą klasę src/Services/JsonData.php ir klasę JsonData.    
// 2. Klasės kostruktorius priima kelią iki json failo ir priskiria jį klasės savybei $filePath    
// 3. Klasė turi metodą getAll();    
// 4. Metodas getAll() paima visus duomenis iš json failo, pagal nurodytą savybę  $filePath    ir grąžina masyvo formatu.    
// 5. Game klasėjės index metode instancijuoti klasę JsonData ir panaudojant    getAll() metodą gauti visus duomenis iš games.json.      
// 6. Patikrinti ar duomenys gauti.