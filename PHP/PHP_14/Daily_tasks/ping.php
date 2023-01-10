<?php

if(isset($_GET["pong"])) {
    echo "PONG! <br><br>";
    echo "<a href='ping.php'>Reset</a>";
} else {
    echo "<a href='pong.php?ping=1'>PING</a>";
};

?>