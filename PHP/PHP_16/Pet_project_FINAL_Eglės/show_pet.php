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
        section {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        article {
            width: 300px;
            height: 400px;
            border: 2px solid black;
            border-radius: 3%;
            padding: 10px;
            margin: 10px;
        }

        div {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding-bottom: 5px;
        }

        img {
            max-width: 200px;
            max-height: 200px;
        }

        .name {
            text-transform: uppercase;
            font-weight: bold;
            color: green;
            margin-bottom: 10px;
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
                            <div class='name'>{$pet['name']}</div>
                            <div>Amžius: {$pet['age']} m.</div>
                            <div>Veilsė: {$pet['breed']}</div>
                            <div>Tipas: {$pet['kind']}</div>
                            <div>Svoris {$pet['weight']} kg</div>
                            <div>Aukštis: {$pet['height']} cm</div>
                            <div>
                                <img src='{$pet['img']}'>
                            </div>
                            <a href='index.php'>Atgal</a>
                        </article>"
            ;
            ?>

        </section>
    </main>

</body>

</html>