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
        img:hover{
            border: 1px solid darkgrey; 
            box-shadow: rgba(0, 0, 0, 0.24) 20px 20px 20px; 
        }
        body{
            align-items: center;
            text-align: center;
            font-size: 30px;
            background-color: lightgrey;
            color: midnightblue;
        }

        h1{
            font-size: 35px;
            text-align: underline;
            color: darkslategray;
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
            border: 2px solid darkgrey; 
            box-shadow: rgba(0, 0, 0, 0.24) 10px 10px 10px; 
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
        echo "<h1>Detali pasirinkto gyvūno informacija: </h1>";


        echo "<img src='".($pets[$myNumber]['img'] ?? '')."'>" . "<br>";  
        echo "Vardas: " . ($pets[$myNumber]['name']?? '') . "<br>";
        echo "Amžius: " . ($pets[$myNumber]['age']??'') ." m.". "<br>";
        echo "Veislė: " . ($pets[$myNumber]['breed']?? '') . "<br>";
        echo "Rūšis: ". ($pets[$myNumber]['kind']?? '') . "<br>";
        echo "Svoris: " . ($pets[$myNumber]['weight']?? '') ." kg" . "<br>";
        echo "Aukštis: " . ($pets[$myNumber]['height']?? '') ." cm" . "<br>";
        echo "<button><a href='index.php'>Grįžti</a></button>";
} else {
        echo "<p>Sorry, your pet was not found :(</p>";
}
}




?>
</body>
</html>

