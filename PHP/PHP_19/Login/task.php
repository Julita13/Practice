<?php
/*I - Projektas login to admin  panel
a) - Prisijungimo forma

1. Sukurti failus app.php, login_form.php, login.php ir admin_page.php. Tai pat įsikelti failus helpers.php ir message.php
2  app.php failas pradeda sesiją, jei sesija nepradėta. Taip pat įtraukia helpers.php ir message.php
3. Nuo šiol visi kiti failai įtrauks app.php failą.
4. login_form.php faile turi būti dokumentas su tagais <main> , <section> ir <form>.  
5. Formoje sukurti 2 įvesties laukus - email ir password.
6. Forma POST metodu pateikia duomenis į failą login.php.
7. login.php turi savaime pasikviečiančią anoniminę funkciją ir validacijos funkciją.

8. Anoniminė funkciją atlieka validaciją. Jei operacija sėkminga, sesijoje išsaugoma žinutė "Operacija sėkminga!"  ir
taip pat pridedamas naujas įrašas - authenticated=1 ir nukreipiama į puslapį admin_page.php.
Jei įvyko klaida,sesijoje išsaugoma žinutė "Operacija nepavyko!" ir grąžinama atgal į formą.  
9.Patikrinti su dump() ar sesijos masyvas užsipildė.*/

// b) message.php žinučių įrašymo pertvarkymas. 

// Tikslas - išsaugoti kiekvieną žinutę kaip atskirą masyvo elementą sesijoje.
// 1) messages.php sukurti papildomą funkciją setErrorMessages() ir peduoti jai žinutes iš validacijos.
// 2) setErrorMessages() iteruoja per žinučių masyvą ir išsaugo kiekviena žinutę sesijoje:
// $SESSION['messages'][] =[    status=>0,    title=>'Operacija nepavyko!,    body='žinutės tekstas',];
// 3) Sukurti analigišką funkciją setSuccessMessage(), tik ji neturės parametrų ir nedarys foreach. 
// Funkcijaužsetins 1 įrašą į SESSION['messages'][] - status - 1, title - 'Operacija sėkminga'.
// 4) Abi funkcijos yra void.
// 5) Išbandyti funkcijas login.php faile, po validacijos įrašyti žinutes panaudojus šias funkcijas, jei validacijasėkminga - 
// kviečiama setSuccessMessage(), jei ne setErrorMessages(), kuriai paduodamos validacijos klaidos.
// 6) Išdumpinti ir patikrinti ar veikia kaip turi būti.

// c) message.php žinučių išspausdinimo pertvarkymas

// 1. message.php faile funkciją getMessage() pervedinti į getMessages(), nes ji grąžina visas žinutes.
// 2. funkciją message() pervadinti į messages(), nes ją pakvietus, bus rodomos visos žinutės.
// 3. funkcija buildMessage() atsakinga už 1 žinutės bloko suformavimą, mūsų tikslas - kiekvienai žinuteisukurti atskirą bloką. 
// Todėl reikia tarpinės funkcijos, kuri iteruos per žinutes ir pritaikys buildMessage() kiekvienai.
// Tokią funkciją pavadinsim buildAllMessages(array $messages): string; Ji priims žinučių masyvą iš sesijos.
// 4. buildAllMessages() kviečiama funkcijoje messages() vietoje seno buildMessage(). Perduodamos žinutės iš getMessages();
// 5. buildAllMessages() gauna žinučių masyvą ir suka ciklą per jį, ir kiekvieną žinutę perduoda į buildMessage() 
// su spreadoperatoriumi (...$message) ir gautą rezultatą kaupia(klijuoja) stringe.
// 6. Pasibaigus ciklui, sukauptas rezultatas įdedamas į papildomus html tagus <div class='messages-wrapper'>{$result}</div> irgražinamas. 
// Tai yra galutinis rezultatas - žinučių html.
// Žinučiu išspausdinimo medis yra toks,:messages()--getMessages()--buildAllMessages()------buildMessage()\

?>