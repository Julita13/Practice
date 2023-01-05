<?php

//funkcija įrašo masyvą į json failą. Takim pizzas.json
function arrayToJsonFile(array $array, string $filePath): void
{
    $data = json_encode($array);
    file_put_contents($filePath, $data);
}

function getDataFromJson($filePath)
{
    $data = file_get_contents($filePath);
    return json_decode($data, true);
}
