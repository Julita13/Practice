<?php
require_once __DIR__ . '\\data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Picos</title>
    <style>
        body {
            width: 1200px;
            margin: auto;
        }

        section {
            width: 800px;
            margin: auto;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            table-layout: fixed;
            margin: auto;
            box-shadow: 0px 0px 0px 1px #939393;
        }

        td,
        th {
            
            text-align: left;
            padding: 8px;
            text-align: center;
        }

        td:not(:last-of-type),
        th:not(:last-of-type){
            box-shadow: 1px 0px 0px 0px #939393;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        
        img {
            width: 50%;
        }
    </style>
</head>

<body>
    <section>
        <heading>
            <h1>Picų lentelė</h1>
        </heading>
        <?php

        $tr = "
            <th>Nuotrauka</th>
            <th>Pavadinimas</th>
            <th>Kaina</th>
            <th>Ingridientai</th>";

        foreach ($pizzas as $index => $pizza) {
            $tr .= "
                <tr>
                    <td>
                        <img src='{$pizza['image']}'>
                    </td>
                    <td>{$pizza['name']}</td>
                    <td>{$pizza['price']}</td>
                    <td>" . implode(', ', $pizza['ingredients']) . "</td>
                </tr>";
        }

        echo "<table> $tr </table>";

        ?>
    </section>
</body>

</html>


