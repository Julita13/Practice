<?php
include_once(__DIR__ . "/pet_functions.php");
$pets = getPets(__DIR__."/pets.json");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gyvūnų sąrašas</title>
    <style>
        article{
            padding: 3px;
            width: 20rem;
            margin: 30px;
            padding: 30px;
            border: 3px solid darkgrey;
            background-color: lightblue;
            border: 1px solid darkgrey; 
            box-shadow: rgba(0, 0, 0, 0.24) 10px 10px 10px; 
        }
        article:hover {
            background-color: #125896;
            border-radius: 1rem;
            cursor: default;
        }
       
        div{
            padding: 10px;
            text-align: center;
            font-size: 20px;
            margin: 2px;
            border: 1px solid black;
            color: black;
        }
        div:nth-child(2n) {
                background-color: lightgrey;
            }
        div:nth-child(2n-1) {
            background-color: #a2b9bc;
        }
        img{
            width: 18rem;
        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: aliceblue;
        }
        h1{
            text-align: center;
            font-size: 30px;
            text-decoration: underline;
            color: darkslategray;
        }
        a{
            color: royalblue;
            text-decoration: none;
        }
        p {
            cursor: pointer;
            text-decoration: none; 
        } 
        p:hover{
            text-decoration: underline;
            font-size: 22px;
        }
    </style>
</head>
<body>
    <main>
        <section>
            <h1>Gyvūnėlių sąrašas</h1>
            <?php
                foreach($pets as $pet){
                    echo "<article>
                            <div><img src={$pet["img"]}></div>
                            <div>Vardas: {$pet["name"]}</div>
                            <div>Amžius: {$pet["age"]} m.</div>
                            <div>Veislė: {$pet["breed"]}</div>
                            <div>Rūšis: {$pet["kind"]}</div>
                            <div>Svoris: {$pet["weight"]} kg</div>
                            <div>Aukštis: {$pet["height"]} cm</div>
                            <div><p><a href='show_pet.php?id={$pet["id"]}'>Platesnė informacija apie gyvūną<a/></p></div>
                        </article>";
                }

                // <a href='?id={$pet["id"]}>
            ?>
        </section>
    </main>
</body>
</html>
