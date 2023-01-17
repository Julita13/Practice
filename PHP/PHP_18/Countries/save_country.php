<?php
session_start();
include_once __DIR__ . "/helpers.php";


// dd($POST);
if(isset($_POST['countries'])){
    $_SESSION['countries'] = $_POST['countries'];
} 
// dd($_SESSION);
header("Location: select_country.php");




