<?php 

//Viename failų sistemos kataloge mūsų failų pavadinimai turi būti unikalūs - nesikirsti. Kas nutinka, jeigu bandome sukurti naują failą tuo pačiu pavadinimu? 
//Operacinė sistema neleidžia to padaryti - gauname įspėjantį pranešimą. Kokie pasirinkimai mums lieka? 

//1. Pridėti prie failo pavadinimo papildomų simbolių, kad pavadinimai būtų skirtingi. 
//2. Sukurti 2 naujas subdirektorijas, kuriose mūsų failų pavadinimai nesikirs. 

//Failų išsiskirstymas po katalogus leidžia turėti failus su tuo pačiu pavadinimu. Kitaip tariant - mes išvengiame name clashing. Failų pavadinimai nesikerta. 

//Įprastai, PHP projektas turi pradinį failą - šiuo atveju tai yra index.php (mes rašysime publicindex.php)
// Visi kiti failai, talpinantys kodą guli src/kataloge. Kiekviena PHP klasė yra laikoma atskirame faile. 
// Nesvarbu, kiek kodo eilučių sudaro klasę, ji visvien turi atskirą failą (taip, net exception'ai)

//Namespace'ai padeda išlaikyti tvarkingą projekto struktūrą augant klasių skaičiui. 
//Kadangi kiekviena PHP klasė yra laikoma atskirame faile, tų failų kiekis išauga. Atsiranda būtinybė grupuoti failus į katalogus. Namespace'ų naudojimas leidžia palaikyti ryšį tarp failų ir juose esančių klasių.

//NameSpace'as deklaruojamas keyword'u namespace. Po jo eina pats namespace'as - tai dažniausiai yra katalogų pavadinimai, atskirti įžambiuoju kairiniu brūkšniu (backslash) \. 
//Pirmasis namespace'o segmentas - projekto pavadinimas. Šiuo atveju - tai MyProject. Šis segmentas neprivalo atitikti jokio katalogo. 

//Namespace leidžia išvengti problemų dėl sutampančių klasių pavadinimų. Nuo šiol klasės yra identifikuojamos ne pagal tai, kas nurodyta prie keyword'o CLASS, bet pagal visą namespace'ą + pavadinimą. 
//Pvz: MyProject\App
//Tai dar vadinama pilnai kvalifikuotu klasės pavadinimu (FQCN - fully qualified class name)

//Tai reiškia, kad mes galime turėti daugiau negu vieną klasę su sutampančiu pavadinimu. Kadangi tos klasės bus skirtinguose failuose ir skirtingose direktorijose, tad jų FQCN skirsis. 
//Šį pavadinimą (FQCN) dabar galime naudoti klasių importavimui. 

//Mūsų klasės yra pabirusios po atskirus katalogus ir failus. Dažniausiai rašant naująją klasę vien jos pačios logikos mums nepakanka - mums yra reikalinga anksčiau parašyta klasė, esanti kitame kataloge. 
//Kaip mums ją ištraukti į savo naujosios klasės kodą? 

//1 VARIANTAS: 
//Pasinaudojant require constructu. Tai nėra patogu, nes turime rankiniu būdu įtraukti visas reikiamas klases. 

//2 VARIANTAS 
//Pasinaudojant autoloading'u: šis būdas yra patogus, nes mums užtenka nurodyti klasės pavadinimą (FQCN) ir klasė bus importuota.

//Autoloadingas veikia tokiu būdu:
//Naudojama funkcija spl_autoload_register. 

//Kiekvieną kartą kai panaudojamas keyword new, yra iškviečiama funkcija, kuri buvo paduota į spl__autoload_register. Pagal klasės pavadinimą (FQCN) bandoma surasti failą, kuriame turėtų būti talpinama ta klasė. 

//Konstanta DIRECTORY_SEPARATOR bus naudinga rašant autoloader'ius. Šios konstantos reikšmė yra Jūsų operacinės sistemos naudojamas katalogų skirtukas. Windows OS tai ši reikšmė bus "\", tuo tarpu Linux OS - "/". 

//Kad būtų dar patogiau rašyti kodą, turime use keyword'ą. Jis leidžia sutrumpinti klasės pavadinimą, kurį naudosime kurdami objektą (su keyword'u new). 
//Tai tampa ypač naudinga, kai mūsų projektas išauga ir atsiranda gili subkategorijų struktūra, ko pasekoje klasių pilnai kvalifikuoti pavadinimai (FQCN) tampa labai ilgi. \
//Use keyword'as leidžia dalį to ilgojo pavadinimo deklaruoti failo pradžioje. 
//Use taip pat mums praverčia, jeigu bandome importuoti daugiau nei vieną klasių, turinčių tą patį klasės pavadinimą (ne FQCN).

//Senasis būdas: 
// require "./src/App.php";
// $app = new \MyProject\App;
// $app->execute();


//Naujasis būdas - su autoloading'u
// spl_autoload_register(function ($class_name) {
//     if ($class_name === "MyProject\App") {
//         require "./src/App.php";
//     }
// });

// $app = new \MyProject\App;
// $app->execute();

