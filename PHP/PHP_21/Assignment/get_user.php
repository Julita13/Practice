<?php 
include_once __DIR__ . "/helpers.php";
function getUsers(string $file)
{
    $getData = file_get_contents($file);
    $decodedData = json_decode($getData, true);
    return $decodedData;
}

$jsonPath = __DIR__ . "/users.json";
getUsers($jsonPath);