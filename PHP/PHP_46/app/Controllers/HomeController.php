<?php

namespace App\Controllers;

use App\Services\View;

class HomeController
{
    public function index(): View
    { 
        return view('home');
    }
}


?>