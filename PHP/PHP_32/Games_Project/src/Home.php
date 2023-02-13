<?php

namespace App;

class Home
{
    public function index(): void
    {
        $greet = 'Sveiki atvykę į namus!';
        view("home.php", compact("greet"));
    }
}
