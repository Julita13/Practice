<?php
include_once(__DIR__."/pet_functions.php")
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        section{
            margin-left: 100px;
            width: 300px
        }
        article {
            padding-left: 20px;
            border: 2px solid green;
            margin-top: 20px;
        }
        h1{
            text-decoration: underline;
        }
        article > p:nth-child(even){
            background-color: gray;
            width: 200px;
        }
        article > p:nth-child(odd){
            background-color: goldenrod;
            width: 200px;
        }
        img{
            width: 100px;
        }
        
    </style>
</head>
<body>
    <main>
        <a href="pet.php">To Form</a>
        <?php
        $section = "";
        $petsJson = getPets();
        foreach($petsJson as $item){
            $section .= "<section><article>
                            <h1> {$item['name']}</h1>
                            <img src='".($item['img'] ?? '')."'>
                            <p>Amzius: ".($item['age'] ?? '')."</p>
                            <p>Veisle: ".($item['breed'] ?? '')."</p>
                            <p>Gyvunas: ".($item['kind'] ?? '')."</p>
                            <p>Svoris: ".($item['weight']?? '')."</p>
                            <p>Ugis: ".($item['height'] ?? '')."</p>
                            <a href='show_pet.php?id={$item['id']}'>Placiau</a>
                            <a href='update_pet_form.php?id={$item['id']}'>Update</a>
                        </article></section>";
        }
        echo $section;
    ?>
    </main>
</body>
</html>