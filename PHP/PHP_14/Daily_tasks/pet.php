<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST example</title>
    <style>
        .green {
            height: 200px;
            width: 300px;
            line-height: 200px; 
            background-color: green;
            text-align: center;
        }
        .red {
            height: 200px;
            width: 300px;
            line-height: 200px;
            background-color: red;
            text-align: center;
        }
    </style>
</head>
<body>
<?php 

$get = $_GET;
if (isset($get['status'])) {
        if ($get['status'] == 1) {
            $message = isset($get['message']) ? $get['message'] : "Success"; 
            echo "<div class='green'>$message</div><br>";
        } elseif ($get['status'] == 0) {
            $message = isset($get['message']) ? $get['message'] : "Error"; 
            echo "<div class='red'>$message</div><br>";
        }
    }
?>
    <form action="register_contest.php" method="POST">
        <label for="name">Name: </label><br>
        <input type="text" name="name"><br>
        <label for="age">Age:</label><br>
        <input type="number" name="name"><br>
        <label for="breed">Breed:</label><br>
        <input type="text" name="breed"><br>
        <label for="name">Weight: </label><br>
        <input type="number" name="weight"><br>
        <label for="height">Height: </label><br>
        <input type="number" name="height"><br><br>
        <input type="submit">
    </form> 

</body>
</html>
