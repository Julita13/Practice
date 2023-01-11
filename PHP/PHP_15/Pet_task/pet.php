<?php
    include_once(__DIR__."/helpers.php");
    // dump("asdss", "asd"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST example</title>
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
if (isset($get['status'])) {
    echo nl2br(message(status: $get['status'], body: $get['message'])); // newline2break - visus \n pavers į break'ą
        // if ($get['status'] == 1) {
        //     $message = isset($get['message']) ? $get['message'] : "Success"; 
        //     echo "<div class='message green'>$message</div><br>";
        // } elseif ($get['status'] == 0) {
        //     $message = isset($get['message']) ? $get['message'] : "Error"; 
        //     echo "<div class='message red'>$message</div><br>";
        // }
    }

function message(string $title = '', string $body = '', int $status = 1): string {
    if($status == 1) {
        $title = "Operacija sėkminga";
        $color = "green";
    } elseif($status == 0) {
        $title = "Klaida";
        $color = "red";
    } else {
        $title = "Info";
        $color = "blue";
    }
    $is_json = json_decode($body, true); // jei body ne json formatu (ne masyvas), json_decode grąžina null
    if($is_json){
        $body = implode("\n", $is_json); // paverčiam į stringą
    }
    return "<div class='message $color'><h1>$title</h1><p>$body</p></div>";
    // $is_json = isset($_GET['oldData']) ? $_GET['old_data'] : null;
    //     $oldData = json_decode($json, true);
}



?>

    <form action="register_contest.php" method="POST">
        <label for="name">Name: </label><br>
        <input type="text" name="name"><br>

        <label for="age">Age:</label><br>
        <input type="number" name="age"><br>

        <label for="breed">Breed:</label><br>
        <input type="text" name="breed"><br>

        <label for="weight">Weight: </label><br>
        <input type="number" name="weight"><br>

        <label for="height">Height: </label><br>
        <input type="number" name="height"><br><br>

        <input type="submit">
    </form> 

</body>
</html>
