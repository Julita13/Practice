<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily tasks</title>
    <style>
        .square {
            width: 100px; 
            height: 100px;
            padding: 1rem;
            margin: 1rem;
            text-align: center;
        }

        .red {
            background-color: red;
        }

        .blue {
            background-color: blue;
        }

        .green {
            background-color: green;
        }

        p {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Sveiki!</h1>
    </header> 
</body>
</html>

<?php

include "./paragraph.php";
include "./paragraph.php";
include "./paragraph.php";

$class = "red";
$text = "Raudonas";
require "./square.php";
$class = "blue";
$text = "Mėlynas";
require "./square.php";
$class = "green";
$text = "Žalias";
require "./square.php";


require_once "./functions.php";
echo theBestBite("dog");
echo theBestBite("cat");
echo theBestBite("fish");

?>

<!-- EGLĖS SPRENDIMAS: -->
<!-- <h1>
    <?=theBestBite("dog")?>
</h1>
<h2>
    <?=theBestBite("cat")?>
</h2>
<h3>
    <?=theBestBite("fish")?>
</h3> -->