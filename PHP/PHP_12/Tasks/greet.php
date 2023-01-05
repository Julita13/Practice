<!-- // 1. GREET
// Sukurti 1 php failą greet.php.
// PHP failas turi <a> linką į savo adresą pavadinimu "Greet".
// Paspaudus linką peruodamas parametras "greet=Good evening!".
// Faile yra php kodas, kuris laukia parametro "Greet" $_GET masyve.
// Jei parametras užsetintas ir yra ne tuščias, tuomet atvaizduojama jo vertė, o
// vietoj greet linko atsiranda linkas pavadinimu "Reset", kurį paspaudus grįžtama į pradinę padėtį. -->

<?php 
//1. Pratimas
    if(isset($_GET['greet']) && $_GET['greet']){
        echo $_GET['greet']. "<br><br>";
        echo "<button><a href='greet.php'>Reset</a></button>";
    } else {
        echo "<a href='greet.php?greet=Good evening!'>Greet</a>";
    };
?>


