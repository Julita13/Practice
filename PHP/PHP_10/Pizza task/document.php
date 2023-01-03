<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza task</title>
    <style>
        img {
            width: 100px;
            aspect-ratio: 1/1;
            object-fit: cover;
        }
        table {
            text-align: center;
        }
        tr, td, th {
            padding: 1rem;
        }
        thead {
                background-color: #eee;
            }
        tbody > tr:nth-child(2n) {
                background-color: #ddd;
            }
        tbody > tr:nth-child(2n+1) {
            background-color: #ccc;
        }
    </style>
</head>
<body>
<?php 
    include_once __DIR__ . '/data.php';
?>
    <h1>Pizza's menu</h1>
    <!-- <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Ingridients</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($pizzas as $item){
                $ingrid = '';
                    foreach ($item["ingredients"] as $ingredient) {
                        $ingrid .= $ingredient." ";
                    }
                echo "<tr>
                        <td><img src='{$item["image"]}'></td>
                        <td>{$item["name"]}</td>
                        <td>{$item["price"]}</td>
                        <td>{$ingrid}</td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>  -->

    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Ingridients</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($pizzas as $item){
                echo "<tr>
                        <td><img src='{$item["image"]}'></td>
                        <td>{$item["name"]}</td>
                        <td>{$item["price"]}</td>
                        <td>".implode(", ", $item["ingredients"])."</td>
                    </tr>";
                }
            ?>
        </tbody>
    </table> 
</body>
</html>

