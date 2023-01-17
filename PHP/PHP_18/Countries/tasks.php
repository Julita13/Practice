<?php

/*I - Pasirinkti valstybę - pasirinkti ir išsaugoti mėgstamą valstybę

1.Sukurti failus select_country.php ir save_country.php.

2.Abiejuose pradėti sesijas.

3.select_country.php parašyti formą, kuri daro POST užklausą į save_country.php

4. Formoje yra <select> tagas ir 5 <option> tagai. Kiekvienas <option> tagas leidžia pasirinkti valstybės pavadinimą.
Patvirtinus formą pasirinkimas perduodamas į nurodytą failą.

5.save_country.php yra kodas, kuris išsaugo pasirinkimą php sesijos masyve,jei toks pasirinkimas yra padarytas ir grąžins 
atgal į select_country.php.pvz.: country=>france ir grąžins atgal į select_country.php.

6. select_country.php yra kodas, kuris ieškos sesijos masyve informacijos apiepadarytą pasirinkimą. 
Jei randa pasirinkimą, išspausdiną ji virš sąrašo.*/



// b) - panaikinti pasirinkimą

// 1. Sukurti failą remove_country.php

// 2. select_country.php pridėti nuorodą "Panaikinti pasirinkimą", kuri vedaį remove_country.php su parametru - action=remove

// 3. remove_country.php yra kodas, kuris sprendžia, ar yra reikalavimas pašalintipasirinkimą. 
// Jei yra, iš sesijos panaikinamas country pasirinkimas ir grąžinama atgalį select_country.php.
// 4. Nuspaudus nuorodą "Panaikinti pasirinkimą", inicijuojamas JS kodas, kurisišmeta lentelę su klausimų - 
// "Ar tikrai norite panaikinti?". Patvirtinusveiksmas įvykdomas, atšaukus - ne.



// II - Žinutės perdavimasa)    

// 1. Sukurti failus message_tester.php ir message_writer.php    

// 2. message_tester.php turi html documentą su 4 nuorodom - Success, Failed, Info, Reset.    
// Kiekviena nuoroda veda į message_writer.php,su atitinkamais type parametru, pvz.: type=success    

// 3. message_writer.php turi anoniminę, automatiškai pasileidžiančią funkciją. 
// Ši funkciją    panaudoja $_GET parametru atkeliavusią type vertę ir naudodama switch statement, 
// į sesijos masyvą išsaugo    žinutei reikalingus duomenis. 
// Pvz.:    jei type=success, tai switch statement sesijos masyve įrašys tokias vertes:        
//     status=1,        title='success',        body='',      jei type=failed        status=0,        title='failed',        body=';           jei type=info        status=0,        title='failed',        body=';    
// Masyvo sandara:    
// $_SESSION['message']=    [        
//     'status'=>'',        
//      'title'=>'',        
//      'body'=>'',   
// ]           

// 4. Priskyrus reikiamas vertes į session žinutės vertes, grįžtama atgal į message_tester.php,    
// ir su dump išvedamos sesijos vertės patikrint ar sesijoj išsisaugo duomenys. 
// Spaužiant skirtingas    nuorodas duomenys turi keistis.

// b)    
// 1. Sukurti failą message.php arba įsikopijuokite iš pet projekto..    
// 2. Žinutės funkciją pavadinti/pervedinti į messageBuilder();    
// 3. Šalia sukurti dar 2 funkcijas: getMessage(): array ir message(): string    
// 4. getMessage() iš sesijos ištraukia žinutės masyvą ir jį grąžina, jei sesijos nėra ar žinutės nėra    
// grąžina tuščią masyvą.    
// 5. message() kviečia getMessage() ir gautą atsakymą(masyvą) perduoda į messageBuilder(), 
// panaudojant    spread operatorių - messageBuilder(...$message). messageBuilder atsakymas yra returninamas - 
// tai    bus žinutės html, kuris bus išvedamas į dokumentą, inicijuojant funkciją message().    
// 6. inicijuoti funkciją message()  message_tester.php <body> pradžioje.    Rezultatas - tik pakvietus message() 
// iš sesijos paimami žinutės duomenys, sukuriamas žinutės html ir    grąžinamas. Jei ne, grąžinamas tuščias string