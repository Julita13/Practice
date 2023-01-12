<?php

include_once __DIR__ . '/helpers.php';

function getPets(string $file)
{
    $getData = file_get_contents($file);
    //    dd($getData);
    $decodedData = json_decode($getData, true);
    //    dd($decodedData);
    return $decodedData;
}

function getPet($petId): array
{
    $pets = getPets(__DIR__ . '/pets.json');

    foreach ($pets as $pet) {
        if ($pet['id'] == $petId) {
            return $pet;
        }
    }
    return [];
}