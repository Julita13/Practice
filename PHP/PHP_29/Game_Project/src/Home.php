<?php

namespace src;

class Home {
    public function index() {
        //echo "<h1>Our project starts here</h1>";
        $greet = "Welcome to Home page!";
        include_once __DIR__ . "/../templates/home.php";
    }
}