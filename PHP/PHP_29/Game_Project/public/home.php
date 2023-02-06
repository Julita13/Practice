<?php 
require __DIR__ . "/../autoload/autoloader.php";

use src\Home;

// (new Home())->index();
$myHome = new Home();
$myHome->index();