<?php 

spl_autoload_register(function($className) {
    // echo $className;
    require __DIR__ . "/../$className.php";
});