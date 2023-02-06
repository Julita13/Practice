<?php

namespace src;

class Home
{
    public function index()
    {
        $greet = 'Sveiki atvykę į namus!';
        include __DIR__ . '/../templates/home.php';
    }
}