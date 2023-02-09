<?php

namespace App;

class Home
{
    public function index(): void
    {
        $greet = 'Sveiki atvykę į namus!';
        include __DIR__ . '/../templates/home.php';
    }
}
