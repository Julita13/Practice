<?php 
include __DIR__ . "/document.php";
$jsonPath = __DIR__ . "/pizzas.json";

function arrayToJsonFile(array $array, string $fileName): void {
    $data = json_encode($array);
    file_put_contents($fileName, $data);
};

function getDataFromJson(string $fileName){
    $jsonPath = __DIR__ . "/pizzas.json";
    $newData = file_get_contents($jsonPath);
    $result = json_decode($newData, true);
    return $result;
};

?>

