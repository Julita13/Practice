<?php

include_once __DIR__ . '/pet_functions.php';

$get = $_GET;

if (isset($get['id'])) {
    $pet = getPet($get['id']);
} else {
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Augintinių sąrašas</title>
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
    <main>
        <section>

            <h1>Augintinis</h1>

            <?php
           echo
           "<article>
                    <div>
                       <img src='".($pet['img'] ?? '')."'>
                   </div>
                   <div class='name'>".($pet['name']??'')."</div>
                   <div>Amžius: ".($pet['age']??'')." m.</div>
                   <div>Veilsė: ".($pet['breed']??'')."</div>
                   <div>Tipas: ".($pet['kind']??'')."</div>
                   <div> Svoris ".($pet['weight']??'')." kg</div>
                   <div>Aukštis: ".($pet['height']??'')." cm</div>
                       <button><a href='index.php'>Atgal</a></button>
                   </article>"
       ;
            ?>

        </section>
    </main>

</body>

</html>