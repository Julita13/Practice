<?php
session_start();
include_once __DIR__ . "/helpers.php";
include_once __DIR__ . "/message.php";
// dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries</title>
    <style>
        body {
            position: relative;
        }
        .message {
            margin: 12px 15px;
            width: 200px;
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
    echo message();
    ?>
    <div>
        <a href="message_writer.php?type=success">Success</a>
        <a href="message_writer.php?type=failed">Failed</a>
        <a href="message_writer.php?type=info">Info</a>
        <a href="message_writer.php?type=reset">Reset</a>
    </div>
</body>
</html>