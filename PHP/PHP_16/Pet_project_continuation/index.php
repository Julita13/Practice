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
            margin: 20px;
        }
       
        div{
            padding: 10px;
            text-align: center;
            font-size: 20px;
            margin: 2px;
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
    </style>
</head>
<body>
    <main>
        <section>
            <h1>Gyvūnėlių sąrašas</h1>
            <?php
                foreach($pets as $pet){
                    echo "<article>
                            <div><img src='https://cdn.britannica.com/79/8179-050-F1398EAA/Chow-chow.jpg'></div>
                            <div>Vardas: {$pet["name"]}</div>
                            <div>Amžius: {$pet["age"]}</div>
                            <div>Veislė: {$pet["breed"]}</div>
                            <div>Rūšis: {$pet["kind"]}</div>
                            <div>Svoris: {$pet["weight"]}</div>
                            <div>Aukštis: {$pet["height"]}</div>
                            <div>Platesnė informacija apie gyvūną: <a href='show_pet.php?id={$pet["id"]}'>čia<a/></div>
                        </article>";
                }

                // <a href='?id={$pet["id"]}>
            ?>
        </section>
    </main>
</body>
</html>
