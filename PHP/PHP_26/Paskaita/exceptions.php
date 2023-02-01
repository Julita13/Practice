<?php 

//PHP suteikia galimybę pertraukti programos vykdymą susidarius tam tikroms sąlygoms.  Pvz.:
//1. Vartotojas įvėdė netinkamo tipo duomenis;
//2. Vartotojo įvestos reikšmės neatitinka reikalavimų. 
//3. Nepavyko užmegzti ryšio su išorine sistema ir t.t. 

//Tokiais atvejais mes norime, kad mūsų programa tvarkingai suvaldytų tokią situaciją, vietoje to, kad ji "nulūžtų".
//Tam yra naudojami "exception'ai". 
//Keyword'as THROW įsako PHP toliau nevykdyti kodo ir "išmesti" exception'ą. 

//Įprastu atveju išmetus exception'ą, mūsų programos vykdymas sustos - programa nulūš ir matysime klaidos pranešimą. 

//Tam, kad programos vykdymas tęstusi, naudojame try ir catch blokus. Naudojami kartu jie leidžia pagauti ir apdoroti exception'us. 

//Tai veikia tokiu principu - jeigu try bloke esantis kodas išmeta exception'ą, tuomet yra vykdymas catch blokas. Tik tam yra viena sąlyga - exception'o tipas, nutodytas 
//catch bloko skliaustuose, turi sutapti su tuo, kuris buvo išmestas. 

//Catch blokas "pagauna" exception'us, kurie kyla iš bet kurio kodo lygio (stack). Tai tarsi burbuliukas vandenyje, kuris kyla į paviršių tol, kol sutinka kliūtį. 
//Jeigu tos kliūties nesutinka, tai programos vykdymas baigiasi klaidos pranešimu. 

//Kiekvienas try blokas turi turėti bent vieną su juo susijusį catch bloką. 

//Apdoroti exceptioną - jei tai susiję su validacija, galima rodant vartotojui hint'ą, kaip jis galėtų pakeisti inputą, kad tai tenkintų validaciją. 

//Jeigu tai komunikacijos su išore klaida, tai galime rodyti bendrą klaidos žinutę ir pridėti įrašą į logą, kuris leistų mums daugiau sužinoti apie klaidos kontekstą ir panašiai. 

//Catch blokas talpina logiką, kuri numato, kaip programa atsakys į mestą exception'ą. 
//Šiam blokui tarp skliaustų nurodome, kokio tipo exception'us šis blokas galės apdoroti, taip pat nurodome ir kintamąjį ($exception), kuriam bus priskirtas exception'o objektas. 

//Klasė Exception yra bazinė visų exception'ų klasė. Įprastai, jei norime naudoti (mesti) savo kode exception'us, mes susikuriame išvestines klases, kurios paveldi iš Exception.
//Jeigu bandysime gaudyti exception'ą, kuris nepaveldi EXCEPTION klasės, gausime klaidą. Šios klasės metodus galime matyti dokumentacijoje. 
//Gaudydami exception objektą, pagausime visus objektus, kurių klasės paveldi iš Exception. Dėl dažniausiai yra gaudomi labiau specifiniai (išvestiniai) exception'ai

// Tais atvejais, kuomet norime užtikrinti, jog tam tikra logika bus įvykdyta nepaisant to ar buvo išmestas exception'as, naudojame finally bloką. 
//Logika esanti finally bloke bus vykdoma netgi tuo atveju, jei try bloke yra return. Tokiu atveju reikšmė iš funkcijos bus gražinama tik po to, kai suveiks finally bloko logika.

//Exceptionai gali būti naudojami bet kurioje kodo vietoje, nesvarbu kokiu stiliumi programuojate - procedūriniu ar objektiniu. Dažniausiai bus metami klasės metoduose. 

//Jeigu klasės metodas metą exceptioną to nurodyti prie return tipo nereikia, nes esception'o metimas nesiskaito kaip return. 

//Pasibaigus try ... catch blokams, kodas yra vykdomas toliau. 

//Globalus exception handleris. Tai paprasta funkcija, kurią turėtume užregistruoti pačioje programos vykdymo pradžioje. Šiais funkcijai užregistruoti naudojame funkciją set_exeption_handler. 

