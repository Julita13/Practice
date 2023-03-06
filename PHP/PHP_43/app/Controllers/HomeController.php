<?php 

namespace App\Controllers;
use App\Services\View;
class HomeController {
    public function index(): View {
        // return "Hello, you are home!";
        // dump(view('home'));
        return view('home');
    }
}

?>