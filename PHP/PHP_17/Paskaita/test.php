<?php

// session_start([
//     'name' => "ManoSesija",
// ]);
session_start();
// $_SESSION['name'] = "Julita"; 
echo $_SESSION['name'];


// var_dump($_SESSION); // NULL

// session_start();
// var_dump($_SESSION); //array(0){}

// $_SESSION['user_region_preference'] = $_GET['user_region_preference'];
// var_dump($_SESSION); //array(1){["user_region_preference"] => string(6) "Europe} 
// echo session_save_path();
// /var/lib/php/sessions