<?php 
$pizzasFile = __DIR__ . "/document.php";
$myArray = file_get_contents($pizzasFile);
$pizzasArray = explode(",", $myArray);

echo $myArray;
print_r($pizzasArray);

function arrayToJsonFile(array $array, string $fileName): void {
    $data = json_encode($array);
    file_put_contents($fileName, $data);
};

// function getDataFromJson($jsonFile){
//     $jsonPath = __DIR__ . "/pizzas.json";
//     $newData = file_get_contents(json_decode($jsonPath));
//     echo $newData;
// };

arrayToJsonFile($pizzasArray, "pizzas.json");

?>