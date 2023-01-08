<a href="randomizer.php">Pick User:</a>

<?php

if ($_GET) {
    foreach ($_GET as $item) {
        echo "<h1>$item</h1>";
    }
};
?>