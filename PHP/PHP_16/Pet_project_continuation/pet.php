<?php
include_once(__DIR__."/helpers.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PET</title>
    <style>
        body {
            position: relative;
        }

        .message {
            margin: 12px 15px;
            width: 400px;
            padding: 12px 15px;
            display: inline-block;
            text-align: center;
            line-height: 1em;
            color: whitesmoke;
            font-size: 18px;
            position: fixed;
            top: 0;
            right: 0;
            border-radius: 1px;
            outline: 1px solid #b0b0b0;
        }

        .green {
            background-color: green;
        }

        .red {
            background-color: red;
        }
        .blue {
            background-color: blue;
        }
    </style>
</head>
<body>
    <?php

$get = $_GET;
if(isset($get['status'])){

    echo nl2br(message(status: $get['status'], body: $get['message'])); //newline2break visus \n pavers i <br> 
}
$json = isset($_GET['old_data']) ? $_GET['old_data'] : "";
$oldData = json_decode($json, true);

function message(string $title = '', string $body = '', int $status = 1):string
{
    if($status==1){
        $title = "Operacija sėkminga";
        $color = "green";
    }elseif($status == 0){
        $title = "Klaida";
        $color = "red";
    }else{
        $title = "Info";
        $color = "blue";
    }
    $is_json = json_decode($body, true); //jei body ne json formatas (masyvas), json_decode grazina null
    if($is_json){
       $body = implode("\n" , $is_json); //paverciam i stringa
    }
        return "<div class='message $color'><h1>$title</h1><p>$body</p></div>";
}


// $body bus tas kas perduoda, arba nieko. Jei perduotas json stringas, išparsinti į masyvą ir
// suklijuoti į tekstą.

// Pakvieskite funkcija message() ir perduokite GET parametrais gauta info:
// status į $status
// message į $body
// title palikite tučią.

// Galite pasinaudoti "named" argumentu perdavimu.
?>

    <form action='register_contest.php' method='POST'>
        <label>Name:</label>
        <input type="text" name="name" value="<?= $oldData['name'] ?? "" ?>"> <br><br>

        <label>Age:</label>
        <input type="number" name="age" value="<?= $oldData['age'] ?? "" ?>"><br><br>

        <label>Breed:</label>
        <input type="text" name="breed" value="<?= $oldData['breed'] ?? "" ?>"><br><br>

        <label>Weight:</label>
        <input type="number" name="weight" value="<?= $oldData['weight'] ?? "" ?>"><br><br>

        <label>Height:</label>
        <input type="number" name="height" value="<?= $oldData['height'] ?? "" ?>"><br>
        <br>
        <input type="submit">
    </form>
</body>
</html>
