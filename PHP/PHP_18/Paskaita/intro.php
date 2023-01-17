<?php
include_once __DIR__ . "/helpers.php";
//dump($_SESSION);

session_start();
// session_destroy();
dump($_SESSION);
$_SESSION['name'] = 'Julita';
$_SESSION['surname'] = 'Mažuolytė-Mečkovska';
$_SESSION['profession'] = 'programmer';
