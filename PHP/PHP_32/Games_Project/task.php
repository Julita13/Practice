<?php

// I.URL nuorodų sutvarkymas
// 1. _helper.php parašyti naują funkciją pavadinimu "url"
// 2. funkcija priima 1 argumentą string $path
// 3. funkcija turi $kintamąjį $public, kuriam yra priskiriamas adresas iki public direktorijos 
// pvz.: http//localhost/x/x/x/x/public
// 4. funkcija sujungia gautą  argumentą $path su $public ir grąžina nuorodą iki viešo resurso
// Pabandyti pakviesti - url('games/index.php');
// Rezultatas http//localhost/x/x/x/x/public/games/index.php;


// II. Edit funkcionalumas
// 1. Sukurkite viešame kataloge public naują endpoint failą edit.php - public/game/edit.php
// 2. public/game/edit.php kviečia klasės Game metodą edit, kuriam kaip argumentą perduodaid reikšmę. 
// Id reikšmė ateina iš GET parametro id. Kaip pavyzdį naudoti public/game/show.php
// 3. src/Game.php klasėje sukurti metoda edit(), kuris kaip ir show() gauna $id argumentą.
// 4. Naudojant šį argumentą surandamas konkretus žaidimas.
// 5. Patikrinti ar žadimas randamas naudojant dd() ir naršyklėj įvedus adresą 
// http://.../public/edit.php?id=16. 
// Naudojant pagalbinę funkciją view() pritraukiamas templates/games/edit.php - šio failo dar nėra, 
// bus kuriamas kitame žingsnyje.
// Į funkciją view() perduodamas surastas žaidimas $game, kaip antras argumentas.
// 7. Sukurti naują failą templates/games/edit.php, įkelti formą iš templates/games/create.php 
// 8. Patikrinti ar atsivaizduoja forma.
// 9. Darome pakeitimus edit.php template formoje:    
//     a) action nuoroda keičiama į public/games/update.php(panaudokite pagalbinę funckiją url()), 
//     o method keičiamas į POST.       
//     b) naudojant perduotą kintamąjį $game formoje užpildome kiekvieną input value atributą.       
//     c) formoje pridedamas input su type = hidden ir jo value bus žaidimo id.


// III. Update funkcionalumas

// 1. Viešame kataloge public sukurti naują endpoint failą update.php - public/game/update.php.
// Šio failo paskirtis, kaip ir store.php, priimti POST užklausą iš edit.php formos.
// 2. Iškviesti Game metoda update ir jam perduoti $_POST duomenis.
// 3. src/Game.php sukurti naują metodą update, kuris priima masyvą pavadinimu $game kaip argumentą.
// 4. Kaip ir store() panaudotas atskiras metodas $this->createRecord($data) metode, 
// taip irupdate metode turi būti sukurtas ir panaudotas $this->updateRecord($game).
// 5. Sukurti metodą updateRecord() šalia createRecord().
// 6. Užpildyti jį atnaujinimo kodu iš 17 pamokos - failas:pet_functions.php  funkcija:updatePet().
// 7. Atlikti reikiamus pakeitimus, kad veiktų.
// . Atnaujinus grąžinama atgal į index.php