<!-- 1. SEND MESSAGE
    Sukurti 2 failius page_1.php ir page_2.php.
    Failas page_1.php turi 2 linkus į page_2.php.
    Pirmas linkas pavadintas "Eiti be žinutės" ir veda į page_2.php be parametrų.
    Antras linkas pavadintas "Eiti su žinute" ir veda į page_2.php su parametru
    message="Sveikinimai iš pirmo puslapio!".

    Failas page_2.php turi kodą, kuris tikrina, ar $_GET masyve yra "message".
    Jei yra, tuomet išpsausdina "message" vertę didelėm raidėm.
    Jei "message" nėra, išsausdinamas tekstas "NO MESSAGE".
    Failas 2 taip pat turi linką atgal į page_1, pavadinimu "Grįžti" -->

<!-- 2. PING PONG
    Sukurti 2 failius ping.php ir pong.php.

    Failas ping.php turi nuorodą į pong.php, su parametru ping=1
    Failas pong.php turi kodą, kuris tikrina ar $_GET masyvas turi
    "ping" parametrą. Jei "ping" parametras yra, pong.php automatiškai
    grąžina atgal į ping.php, naudodama funkciją header(), kurioje nurodo
    adresą ir parametrą pong=1.
   
    Funkcija header() sukuria GET užklausą į nurodytą adresą.
    Pvz.: header("Location somepage.php?param=1");
    ping.php turi kodą, kuris tikrina ar url'e yra parametras "pong".
    Jei parametras yra, tuomet išspaudina tekstą "PONG!" ir atvaizduoja
    nuorodą "reset", kuri panaikinta parametrus url'e ir grąžina puslapį
    į pradinę būseną. -->