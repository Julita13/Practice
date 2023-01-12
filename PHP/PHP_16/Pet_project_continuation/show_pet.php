<?Php
include_once(__DIR__ . "/pet_functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 300px;
            align-items: center;
            margin-bottom: 10px;
        }
        body{
            align-items: center;
            text-align: center;
            font-size: 20px;
            background-color: lightgrey;
        }
    
    </style>
</head>
<body>
    
<?php 

if (isset($_GET['id'])) {
    $myNumber = ($_GET['id'])-1;
    $pets = getPets(__DIR__ . "/pets.json");
    if (isset($pets[$myNumber]['id'])){
        echo "<h1>Pasirinkto gyvūnėlio informacija: </h1>";
        echo "<div><img src='https://cdn.britannica.com/79/8179-050-F1398EAA/Chow-chow.jpg'></div>";
        echo $pets[$myNumber]['name'] . "<br>";
        echo $pets[$myNumber]['age'] . "<br>";
        echo $pets[$myNumber]['breed'] . "<br>";
        echo $pets[$myNumber]['kind'] . "<br>";
        echo $pets[$myNumber]['weight'] . "<br>";
        echo $pets[$myNumber]['height'] . "<br>";
} else {
        echo "Resource not found";
}
}
?>
</body>
</html>

