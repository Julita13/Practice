<?php
include_once(__DIR__ . "/helpers.php");
function getPets(string $file): array {
    $petsData = file_get_contents($file);
    $decodedData = json_decode($petsData, true);
    return $decodedData;
};

// var_dump(getPets(__DIR__ . "/pets.json"));