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
            width: 600px;
            align-items: center;
            margin-bottom: 10px;
        }
        body{
            align-items: center;
            text-align: center;
            font-size: 30px;
            background-color: lightgrey;
        }

        h1{
            font-size: 35px;
            text-align: underline;
        }
        button{
            width: 100px;
            padding: 3px;
            border: 1px solid darkgrey;
            border-radius: 10%;
            background-color: #eee;
            font-size: 15px;
        }
        button:hover{
            width: 130px;
            background-color: darkgrey;
            font-size: 18px;
        }
        p{
            margin-top: 400px;
            color: #125896;

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
        echo "<img src={$pets[$myNumber]['img']}>" . "<br>";
        echo "Vardas: " . $pets[$myNumber]['name'] . "<br>";
        echo "Amžius: " . $pets[$myNumber]['age'] . "<br>";
        echo "Veislė: " . $pets[$myNumber]['breed'] . "<br>";
        echo "Rūšis: ". $pets[$myNumber]['kind'] . "<br>";
        echo "Svoris: " . $pets[$myNumber]['weight'] . "<br>";
        echo "Aukštis: " . $pets[$myNumber]['height'] . "<br>";
        echo "<button><a href='index.php'>Grįžti</a></button>";
} else {
        echo "<p>Sorry, your pet was not found :(</p>";
}
}
?>
</body>
</html>

