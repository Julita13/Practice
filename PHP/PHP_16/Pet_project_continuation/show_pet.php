<?php 
include_once(__DIR__ . "/pet_functions.php");

if (isset($_GET['id'])) {
    $myNumber = ($_GET['id'])-1;
    $decodedData = getPets(__DIR__ . "/pets.json");
    if (isset($decodedData[$myNumber]['id'])){
        echo "<h1>Pasirinkto gyvūnėlio informacija: </h1>";
        echo "<div><img src='https://cdn.britannica.com/79/8179-050-F1398EAA/Chow-chow.jpg'></div>";
        echo $decodedData[$myNumber]['name'] . "<br>";
        echo $decodedData[$myNumber]['age'] . "<br>";
        echo $decodedData[$myNumber]['breed'] . "<br>";
        echo $decodedData[$myNumber]['kind'] . "<br>";
        echo $decodedData[$myNumber]['weight'] . "<br>";
        echo $decodedData[$myNumber]['height'] . "<br>";
}
}