<?php
session_start();
include_once __DIR__ . "/helpers.php";

$get = $_GET;

if(isset($get["action"]) &&  $get['action'] == "remove") {
    unset($_SESSION['countries']);
};

header("Location: select_country.php");

