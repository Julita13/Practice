<?php 

//HTTP
//Protokolas - tai taisyklės ir procedūros, kuriomis vadovaujantis įrenginiai persiunčia ir priima duomenis. 
//Protokolai tai lyg vienoda "kalba", kuria sutarta kalbėti, norint pasidalinti duomenimis. 

// HTTP protokolas sukurtas komunikacijai tarp naršyklių (client/user-agent) ir web serveriu. 
//Klientai (naršyklės) ir web serveriai komunikuoja apsikeisdami atskirais pranešimais (messages).

//Tie pranešimai vadinami užklausomis (request) iš kliento ir atsakymais (response) iš serverio.

//http:// naršyklės adreso laukelyje nurodo, kad pradedama komunikacija pagal šį protokolą su web serveriu iš kurio tikimės gauti atitinkamą
//atsakymą - dokumentą su reikiamu turiniu arba su klaidos pranešimu. 

//Pagal HTTP, būsenos apie praėjusias užklausas nėra saugomos (stateless protocol).
//T.y. kiekviena užklausa yra atskira, savarankiška ir nepriklausoma ir nėra susijusi su prieš tai eita. 

//Kad būtų galima susieti vieną užklausą su kita, galima perduoti duomenis arba išlaikyti juos tarp užklausų, naudojant parametrus arba įrašant duomenis į sesiją. 

// HTTP METODAI

//Kad būtų aišku, koks veiksmas turi būti atliekamas, užklausos turi metodus, kurie nurodo veiksmo esmę. 

//GET - paimti duomenis
//POST -  įrašyti duomenis
//PUT - atnaujinti duomenis
//DELETE - ištrinti

//GET metodas nurodo, kad norima gauti resursą (dokumentą), bet duomenų modifikacija (duombazės pakeitimai) nebus atliekama. 
// Tai dažniausias užklausos metodas. Bet koks kreipimasis per URL laukelį (įprastas puslapio užkrovias), naudoja GET metodą. 
//Paprašoma resurso, jis grąžinamas naršyklei ir atvaizduojamas. 

//GET metodu galima perduoti papildomus parametrus, užkoduotus URL'e. 
//Tokie parametrai vadinami QUERY STRING/SEARH STRING. 
//Parametrai - vienas iš būdu išlaikyti informaciją tarp atskirų, nepriklausomų užklausų.

//Query string/search string - parametrai, kurie bus perduodami į serverį su URL. 
//Rašomas url'e, adreso gale. Pradedamas ?. Po klaustuko rašomi parametrai, kurie bus perduodami į serverį. 
//Parametro formatas yra name=value. 
//Parametrai atkiriami &  (ampersand) ženklu, pvz: http://localhost?first_name=Tomas&Last_name=Tomukas.

//GET užklausos parametrai PHP yra automatiškai išsaugomi globaliame kintamajame $_GET masyvo formatu. 
//Masyvas $_GET yra prieinamas visur PHP kode. 

//1. GET skirta peržiūrėti/filtruoti duomenis, bet nieko neįrašyti. 
//2. GET užklausa atlieka naršyklės suvedus adresą į url laukelį. 
//3. GET užklusa taip pat atliekama paspaudus ant nuorodos.
//4. Užkrovus puslapį yra gaunami resursai, reikalingi atvaizduoti puslapį. 
//5. Ta pačią GET užklausą galima kartoti daug kartų ir neturėti jokių išliekančių padarinių. 
//


?>