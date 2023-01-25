<?php

//Inheritance
//Tai vienas iš būdų pernaudoti kodą objektiniame programavime. Norėdami pakeisti tam tikros klasės elgesį, neprivalome kurti naujos klasės
//kopijos - galime tiesiog išplėsti klasę, t.y. sukurti paveldinčiają klasę. 
//Raktažodis - extends. Jis leidžia naujai kuriamai klasei paveldėti metodus bei savybes iš bazinės klasės.
//Paveldinti klasė gali naudoti tik "public" arba "protected" matomumo bazinės klasės metodus bei savybes. 
// Terminologija: 
// Klasė, kurią paveldi dar gali būti vadinama: bazine, tėvine arba super klase. 
//Paveldinčioji klasė dar gali būti vadinama vaikine, subklase, išvestine klase. 

//Matomumo lygiai:
// Public: Class - taip, child class - taip, global scope - taip. 
// Protected: Class - taip, child class - taip, global scope - ne. 
// Private: Class taip, child class - ne, global scope - ne. 

//Public matomumas yra daugiausiai leidžiantis - galima pasiekti metodus ir savybes iš bet kurio konteksto (scope).
//Protected matomumas leidžia pasiekti savybes bei metodus viduje ir paveldinčioje klasėse. 
//Private matomumas prieigą suteikia tik tai klasei, kuriai priklauso savybė ar metodas. 

//Metodų perrašymas.
//Paveldinčios klasės gali perrašyti (override) tėvinės klasės metodus ir savybes (properčius).
//Kad metodas ar savybė galėtų būti perrašomas, jo matomumas turėtų būti public arba protected. 
//Private metodai negali būti perrašomi. Taip pat vertą paminėti, kad protected metodai gali būti kviečiami tik paveldinčioje klasėje - jų negalima kviesti klasės išorėje. 

//Specialus raktažodis "parent" leidžia iškviesti tėvinės klasės metodą. Tai naudinga tada, kai norime paveldinčioje klasėje papildyti tėvinės klasės metodo elgesį.
//Parent galima naudoti tik su tais metodais, kurių matomumas bazinėje klasėje yra public arba protected. 
//Perrašyto metodo parametrai ir rerturn tipas (signature) turi sutapti su tėvinės klasės metodo signature. T.y. negalime metodo parametrų skaičiaus ar jų tipo keisti metodo return tipo.
//Tai negalioja perrašant __construct metodą. Šiuo atveju galime keisti parametrų kiekį - t.y. pridėti papildomų parametrų. 

//Kaip ir metodų atveju, taip ir savybės, kurių matomumas public arba protected gali būti pasiekiamos vaikinėje klasėje. 