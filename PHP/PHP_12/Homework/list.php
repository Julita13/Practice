<?php 

function exercise5(): array
{
    $filePath = __DIR__ . "/transport.js";
    $vehicles = file_get_contents($filePath);
    $result = json_decode($vehicles, true);
    return $result;
}

// print_r(exercise5());

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza task - 2</title>
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
    <h1>List of transports</h1>

                
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Name</th>
                <th>Weight</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $vehicles = exercise5();
                foreach($vehicles as $item){
                echo "<tr>
                        <td>{$item["id"]}</td>
                        <td>{$item["type"]}</td>
                        <td>{$item["name"]}</td>
                        <td>{$item["weight"]}</td>
                        <td><a href='show.php?id={$item["id"]}'>Link</a></td>
                    </tr>";
                }
            ?>
        </tbody>
    </table> 
</body>
</html>