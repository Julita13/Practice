<?php 

//POST yra http užklausos metodas, kurio paskirtis yra perduoti duomenis serveriui su tikslu išsaugoti juos arba aktyvuoti procesą, 
// kuris turės išliekančias pasekmes duomenų bazėje. 

// Atliekant užklausas POST metodu, duomenys siunčiami užklausos "body" dalyje, dar vadinama kroviniu (payload), kitaip nei GET, kuris "body" dalies neturi ir 
// jo duomenys perduodami su užklausos adresu. 

//Kadangi parametrai perduodami ne url'e, o http užklausos "body", jų nesimato adreso lauke. 


//POST užklausą galima sugeneruoti iš backend'o, bet taip pat galima atlikti ir per naršyklę. 
//Kad naršyklė atliktų POST užklausą į nurodytą adresą, reikalinga HTML forma <form></form>.

//HTML forma gali stlikti tiek GET tiek POST užklausas į nurodytą adresą.

//<form action="some_resource.php"></form>
// <form action="some_resourse.php" method="GET"></form>

// POST forma: 
// <form action="some_resource.php" method="POST"></form>

//Perduoti duomenys bus automatiškai talpinami php $_POST masyve. 
// $_POST - vienas iš superglobalių kintamųjų, kuriame išsaugomi užklausos parametrai, 
// perduodami http POST užklausos metu. Kintamasis sukuriamas automatiškai ir yra prieinamas visur php kode,

//POST metodas neturi parametrų kiekio/ilgio apribojimų.
//POST metodu galima perduoti įvairaus tipo duomenis, ne tik stringą, kitaip nei su GET.
//POST metodas naudojamas įrašyti/išsaugoti duomenis.
//POST metodui reikalinga html forma.
//POST metodu siunčiami parametrai nesimato url'e, o perduodami su užklausos "body" dalimi. 
