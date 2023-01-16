<?php

// Sesija -tai būdas laikinai išlaikyti duomenis tarp atskirų užklausų.

//Kam reikalinga sesija? 
//Sesija leidžia atpažinti klientą (naršyklę), darantį užklausas į serverį, todėl naudojama išlaikyti ir naudoti informaciją, susijusią su tuo konkrečiu klientu. 

//Sesijos naudojimo pavyzdžiai:
//1. Vartotojų pirkinių krepšeliui saugoti jam naršant po el. parduotuvę. 
//2. Išlaikyti vartotojo statusą sistemoje - ar prisijungęs prie sistemos ar ne.
//3. Perduoti pranešimams
//4. Kitais atvejais, kada yra poveikis išlaikyti informaciją apie klientą. 

//Kaip veikia sesija? 
 
//1. Pradedama sesija
//2. Sugeneruojamas atsitiktinis sesijos ID
//3. Sukuriamas failas, kuriame bus saugoma sesijos informacija. 
//4. Informaciją išsaugoma faile. 
//5. Grąžinamas resursas klientui su slapuku "Set-Cookie" ir sesijos ID. 
//6. Klientas išsisaugo slapuką ir perduoda jį su kitom užklausom į serverį. 
//7. Severis atpažįsta slapuką, pratęsia sesiją ir paima duomenis iš failo. 

// PHP startuojama sesiją su funkciją session_start();
//Jei sesija jau egzistuoja, nauja nekuriama, naudojama esama. 
//Jei sesijios rasti neeina arba jei ji pasibaigusi, sukuriama nauja. 

//Sugeneruojamas atsitiktinis sesijos ID ir sukuriamas failas duomenims saugoti. 
//Failo viduje tekstiniai užkoduoti duomenys. Juos PHP naudoja perkeliant į masyvą $_SESSION. 


//Serveris grąžina resursą kartu su nurodymu išsaugoti sesijos ID naršyklės slapuke. Nurodymas yra Atsako antraštėje "Set-Cookie".
// Klientas išsisaugo slapuką ir perduoda jį su kitom užklausom į serverį. 
// Naršyklė išsaugo sesijos ID slapuke ir perduoda serveriui 

//Serveris atžažįsta klientą pagal sesijos ID iš užklausos slapuko. Duomenis iš sesijos failo ir įkeliami į globalųjį kintamąjį $_SESSION. 
//Kintamasis $_SESSION yra prieinamas visur kode. 

session_start();
$_SESSION['name'] = "Julita";
echo $_SESSION['name'];