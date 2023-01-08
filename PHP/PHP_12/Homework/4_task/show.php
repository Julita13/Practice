<?php
if (isset($_GET['id'])) {
    $myNumber = ($_GET['id']) - 1;
    // echo $myNumber;

    $jsonPath = __DIR__ . "/transport.js";
    $newData = file_get_contents($jsonPath);
    $result = json_decode($newData, true);
    // print_r($result);
    if (!isset($result[$myNumber]['id'])){
        echo "Transport not found";
    } elseif($result[$myNumber]['id']) {
        echo $result[$myNumber]['id'] . "<br>";
        echo $result[$myNumber]['type'] . "<br>";
        echo $result[$myNumber]['name'] . "<br>";
        echo $result[$myNumber]['weight'] . "<br>";
    }
} else {
    echo "Transport not found";
}


?>
