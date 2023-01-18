<?php
include_once(__DIR__ . "/app.php");

(function ():void {
    if ($_GET['logout'] ?? false) { 
        unset($_SESSION['authenticated']);
    }
    header("Location: admin_page.php");
})();

