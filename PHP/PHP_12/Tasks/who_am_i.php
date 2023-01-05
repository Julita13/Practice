<!-- Sukurti 1 php failą who_am_i.php
Failas turi <a> linką į savo adresą, pavadinimu "Who am I?".
Linkas perduoda parametrus first_name, last_name ir city.
Faile yra php kodas, kuris patikrina ar $_GET ne tuščias ir paėmęs visus parametrus
ciklu atspausdina juos stulpeliu. Taip pat vietoje "Who am I" pasirodo mygtukas "Reset", grąžinantis
į pradinę padėtį. -->

<?php
if ($_GET) {
    foreach ($_GET as $item) {
        echo "<h1>$item</h1>";
    } 
    echo "<button><a href='who_am_i.php'>Reset</a></button>";
}
    else {
       echo "<a href='who_am_i.php?first_name=Julita&last_name=Mažuolytė-Mečkovska&city=Vilnius'>Who am I?</a>";
};
?>

